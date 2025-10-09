<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ScheduleCallMail;
use App\Mail\ContactMail;

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
        $course->program = json_decode($course->program);
        $course->learn = json_decode($course->learn);
        $course->jobTitle = json_decode($course->jobTitle);
        $course->workEnvironments = json_decode($course->workEnvironments);
        $course->key_points = json_decode($course->key_points);

        return view('front.courses_details', compact('course', 'suggestCourses'));
    }


    //
    public function financialAid()
    {
        return view('front.financialAid');
    }

    //
    public function contact(Request $request)
    {
        if($request->isMethod('POST')){
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|string|max:20',
                'message' => 'required',
            ]);

            //dd($validated);
            // Send email
            Mail::to('info@gocollege.ca')->send(new ContactMail($validated));

            $request->session()->flash('success', "Thank you for contacting us! We will get back to you soon.");
            return redirect()->route('contact');

        }

        return view('front.contact');
    }

    //
    public function scheduleCall(Request $request)
    {
        if($request->isMethod('POST')){
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|string|max:20',
                'province' => 'required|string|max:255',
                'contact_time' => 'required|string|max:255',
                'consent' => 'required',
            ]);

            // dd($validated);
            // Send email
            Mail::to('info@gocollege.ca')->send(new ScheduleCallMail($validated));

            $request->session()->flash('success', "Thank you for contacting us! We will get back to you soon.");
            return redirect()->route('scheduleCall');

        }
        return view('front.scheduleCall');
    }


    //
    public function terms()
    {
        return view('front.terms');
    }
    
    //
    public function privacy()
    {
        return view('front.privacy');
    }



}

