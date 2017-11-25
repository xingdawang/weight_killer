<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserHealthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Update Personal Weight and Calculate Health Condition
    |--------------------------------------------------------------------------
    |
    | This is a custom controller. Responsible for calculating user Body Mass
    | Index (BMI) and Body Fat Percentage etc.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Check whether any of the user profile is missing.
     *
     * @return bool status of user current profile.
     */
    public function valide_profile() {

    	$current_user = auth()->user();

        $user_status= array(
        	'height_status' => isset($current_user->height),
        	'birthdate_status' => isset($current_user->birth_date),
        	'sex_status' => isset($current_user->sex),
        );


        foreach ($user_status as $status) {
        	if($status == false) {
        		return false;
        	}
        }
        return true;
    }


    /**
     * Show user the page which can add today's weight
     *
     * @return \Illuminate\Http\Response
     */
    public function add_today_weight() {
    	return view('users.today_weight');
    }

    /**
     * Save user weight, bmi, bfp to database.
     * 
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_today_weight(Request $request) {

    	if(!$this->valide_profile()) {
    		return view('users.profile_needed');
    	}
    	
    	$added_time = date('Y-m-d') . '-' . $request->weight_added_time . ":" . date('s');
    	$weight = $request->weight;
    	$current_user = auth()->user();
    	$user_bmi = $this->calc_bmi($weight, $current_user->height);
    	$user_bfp = $this->calc_bfp($user_bmi, $current_user->birth_date, $current_user->sex);
    	DB::table('user_health')
            ->insert([
            	'user_id' => $current_user->id,
            	'body_fat_percentage' => $user_bfp,
            	'body_mass_index' => $user_bmi,
                'weight' => $weight,
                'created_at' => $added_time
            ]);
        return view('home');
    }

    /**
     * Calculate user Body Mass Index (BMI)
     * 
     * @param $weight float user height.
     * @param $height integer user height.
     * @return float $weight (kg) / ($height) ^ 2 (m^2). 
     */
    public function calc_bmi($weight, $height) {
    	return $weight / ($height / 100) / ($height / 100);
    }

    /**
     * Calculate user body fat percentage (BFP)
     *
     * @param $bmi float user BMI
     * @param $birth_date datetime user birth date
     * @param $sex String user sex, Male / Female
     * @return float Adult BFP result: (1.2 * $bmi) - (0.23 * $age) - (0.85 * $sex) - 5.4
     */
    public function calc_bfp($bmi, $birth_date, $sex) {

    	// Calculate age
    	$temp = explode('-', $birth_date);
    	$birth_year = $temp[0];
    	$age = date('Y') - $birth_date;

    	// Determin sex value, male 1, female 0.
    	$sex_value = ($sex == "Male") ? 1 : 0;

    	return (1.2 * $bmi) - (0.23 * $age) - (0.8 * $sex_value) - 5.4;
    }

    /**
     * Return today user bmi.
     *
     * @return \Illuminate\Http\Response
	 */
    public function get_today_bmi() {

    	$current_user_id = auth()->user()->id;
		$all_bmi_today = DB::table('user_health')
			->select('body_mass_index')
			->where([
				['user_id', '=', $current_user_id],
				[ 'created_at', 'LIKE', DATE('Y-m-d').'%']
			])
			->get();

    	// If user is missing profile or missing today value, let them know.
    	if(!$this->valide_profile()) {
    		return view('errors.user_profile_needed');
    	} elseif (empty($all_bmi_today[0])) {
    		return view('errors.user_missing_today_bmi');
    	} else {
    		$avg_today_bmi = $all_bmi_today->avg('body_mass_index');
    		return view('users.today_bmi', compact('avg_today_bmi'));
    	}
    }

    /**
     * Return today user bfp.
     *
     * @return \Illuminate\Http\Response
	 */
    public function get_today_bfp() {
    	$current_user = auth()->user();
    	$current_user_id = $current_user->id;
    	$current_user_sex = $current_user->sex;
		$all_bfp_today = DB::table('user_health')
			->select('body_fat_percentage')
			->where([
				['user_id', '=', $current_user_id],
				[ 'created_at', 'LIKE', DATE('Y-m-d').'%']
			])
			->get();

		// If user is missing profile or missing today value, let them know.
    	if(!$this->valide_profile()) {
    		return view('errors.user_profile_needed');
    	} elseif (empty($all_bfp_today[0])) {
    		return view('errors.user_missing_today_bfp');
    	} else {
    		$avg_today_bfp = $all_bfp_today->avg('body_fat_percentage');
    		return view('users.today_bfp', compact('avg_today_bfp', 'current_user_sex'));
    	}
    }

}
