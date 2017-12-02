<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UpdatePersonalInformationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Update Personal Information Controller
    |--------------------------------------------------------------------------
    |
    | This is a custom controller. Responsible for updating user height,
    | weight and sex information.
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
     * Update user height, birthdate and sex information.
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */
    protected function update(Request $request)
    {
        // dd($request);
        // Check validation of the input method.
        $request->validate([
            'name' => 'string',
            'height' => 'integer',
            'birthdate' => 'date',
            'sex' => 'string',
        ]);

        $current_user_name = $request->name;
        $current_user_height = $request->height;
        $current_user_birthdate = $request->birthdate;
        $current_user_sex = is_null($request->sex) ? auth()->user()->sex : $request->sex;
        $current_user_id = auth()->user()->id;
        
        // Insert personal information into the database.
        DB::table('users')
            ->where('id', $current_user_id)
            ->update([
                'name' => $current_user_name,
                'height' => $current_user_height,
                'birth_date' => $current_user_birthdate,
                'sex' => $current_user_sex,            
            ]);
        return view('welcome');
    }

    /**
     * Display the the form with updating height, birthdate and sex.
     */
    public function index()
    {
        $current_user = auth()->user();
        $current_user_name = $current_user->name;
        $current_user_height = $current_user->height;
        $current_user_birthdate = $current_user->birth_date;
        $current_user_sex = $current_user->sex;
        // dd($current_user);
        return view('users.profile', compact(
            'current_user_name',
            'current_user_height',
            'current_user_birthdate',
            'current_user_sex'
        ));
    }
}
