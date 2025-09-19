<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class HomeController extends Controller
{
    //
    public function index()
    {
        $courses = Courses::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();

        return view('front.index', compact('courses'));
    }

    //
    public function contact()
    {
        return view('front.contact');
    }

    //
    public function about()
    {
        return view('front.about');
    }

    //
    public function courses()
    {
        $courses = Courses::where('status', 'active')->orderBy('id', 'desc')->get();

        return view('front.courses', compact('courses'));
    }

    //
    public function coursesDetails(Request $request, Courses $course)
    {

        //other 3 courses
        $suggestCourses = Courses::whereNotIn('id', [$course->id])
            ->where('status', 'active')
            ->inRandomOrder()
            ->limit(3)
            ->get();



        $course->data = json_decode($course->data);
        return view('front.courses_details', compact('course', 'suggestCourses'));
    }




}

