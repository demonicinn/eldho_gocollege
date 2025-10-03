<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Ab\DashboardController;
use App\Http\Controllers\Ab\ProfileController;
use App\Http\Controllers\Ab\CollegeController;
use App\Http\Controllers\Ab\CoursesController;
use App\Http\Controllers\Ab\TestimonialController;


use App\Http\Controllers\HomeController;


Route::get('/migrate-fresh', function() {
    Artisan::call('migrate:fresh');
    return "migrate fresh";
});

Route::get('/storage', function() {
    Artisan::call('storage:link');
    return "storage";
});

Route::get('/optimize', function() {
    Artisan::call('optimize:clear');
    return "Data optimized";
});



//front pages
Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/course/{course}/{slug}', 'coursesDetails')->name('courses.details');
    Route::get('/financial-aid', 'financialAid')->name('financialAid');
    Route::get('/schedule-a-call', 'scheduleCall')->name('scheduleCall');
});



//Admin
Route::group(['middleware' => ['auth', 'verified']], function () {



    Route::group(['prefix' => 'ab'], function(){

        
        //Dashboard
        Route::controller(DashboardController::class)->group(function () {

            Route::get('/', 'dashboard')->name('ab');
            Route::get('/dashboard', 'dashboard')->name('ab.dashboard');

        });


        //Profile
        Route::group(['prefix' => 'profile'], function(){
            Route::controller(ProfileController::class)->group(function () {

                Route::get('/', 'index')->name('ab.profile');
                Route::put('/update', 'update')->name('ab.profile.update');

                //Password
                Route::group(['prefix' => 'password'], function(){
                    Route::get('/', 'password')->name('ab.profile.password');
                    Route::post('/changed', 'changePassword')->name('ab.profile.password.update');

                });
            });
        });


        //colleges
        Route::controller(CollegeController::class)->group(function () {
            Route::group(['prefix' => 'colleges'], function(){
                Route::get('/', 'index')->name('ab.colleges');
                Route::match(['get', 'post'], '/create', 'create')->name('ab.colleges.create');
                Route::match(['get', 'patch'], '/{college}/edit', 'edit')->name('ab.colleges.edit');
                Route::delete('/{college}/delete', 'delete')->name('ab.colleges.delete');
            });
        });


        //courses
        Route::controller(CoursesController::class)->group(function () {
            Route::group(['prefix' => 'courses'], function(){
                Route::get('/', 'index')->name('ab.courses');
                Route::match(['get', 'post'], '/create', 'create')->name('ab.courses.create');
                Route::match(['get', 'patch'], '/{course}/edit', 'edit')->name('ab.courses.edit');
                Route::delete('/{course}/delete', 'delete')->name('ab.courses.delete');
            });
        });

        //testimonials
        Route::controller(TestimonialController::class)->group(function () {
            Route::group(['prefix' => 'testimonials'], function(){
                Route::get('/', 'index')->name('ab.testimonials');
                Route::match(['get', 'post'], '/create', 'create')->name('ab.testimonials.create');
                Route::match(['get', 'patch'], '/{testimonial}/edit', 'edit')->name('ab.testimonials.edit');
                Route::delete('/{testimonial}/delete', 'delete')->name('ab.testimonials.delete');
            });
        });




    });
});  