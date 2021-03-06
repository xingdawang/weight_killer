
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

// Add custom JavaScript files
require('./bootstrap-datepicker.js');

// Introduce google charts for user bmi and bfp
require('./user-bmi.js');
require('./user-bfp.js');
require('./user_weight_trendline.js');
require('./accordion.js');