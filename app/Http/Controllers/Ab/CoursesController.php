<?php

namespace App\Http\Controllers\Ab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Colleges;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    //index
    public function index(Request $request)
    {
        $coursesData = Courses::where(function ($query) use ($request) {
            // if($request->search){
            //     $query->where('name', 'like', '%'.$request->search.'%');
            //     $query->orWhere('number', 'like', '%'.$request->search.'%');
            //     $query->orWhere('address', 'like', '%'.$request->search.'%');
            // }
            // if($request->licence_expire){
            //     $query->whereDate('licence_valid_till', '<=', $request->licence_expire);
            // }
            // if($request->status){
            //     $query->where('status', 'like', '%'.$request->status.'%');
            // }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);

        return view('ab.courses.index', compact('coursesData'));
    }

    //create - store
    public function create(Request $request)
    {

        if($request->isMethod('POST')){
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required',
                'college_id' => 'required',
                'category' => 'required',
                'data' => 'required',
                'image' => 'required|image|max:1024',
                'status' => 'required',
            ]);

            $data = array_values($request->data);
            
            $store = new Courses;
            $store->title = $request->title;
            $store->slug = Str::slug($request->title, '-');
            $store->description = $request->description;
            $store->college_id = $request->college_id;
            $store->category = $request->category;
            $store->data = json_encode($data);

            //...image
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalName();
                $file->storeAs('courses', $filename, 'public');
                //...
                $store->image = $filename;
            }

            //...meta tags
            $store->meta_title = $request->meta_title;
            $store->meta_keyword = $request->meta_keyword;
            $store->meta_description = $request->meta_description;

            //...
            $store->status = $request->status;
            $store->save();
            
            $request->session()->flash('success', "New course added successfully");
            return redirect()->route('ab.courses');
        }

        //pluck data
        $colleges = self::getData('colleges');

        return view('ab.courses.create', compact('colleges'));
    }

    //edit - update
    public function edit(Request $request, Courses $course)
    {
        if($request->isMethod('PATCH')){
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required',
                'college_id' => 'required',
                'category' => 'required',
                'data' => 'required',
                'image' => 'nullable|image|max:1024',
                'status' => 'required',
            ]);

            $data = array_values($request->data);

            $course->title = $request->title;
            $course->slug = Str::slug($request->title, '-');
            $course->description = $request->description;
            $course->data = json_encode($request->data);
            $course->college_id = $request->college_id;
            $course->category = $request->category;
            $course->data = json_encode($data);

            //...image
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalName();
                $file->storeAs('courses', $filename, 'public');
                //...
                $course->image = $filename;
            }

            //...meta tags
            $course->meta_title = $request->meta_title;
            $course->meta_keyword = $request->meta_keyword;
            $course->meta_description = $request->meta_description;
            
            //...
            $course->status = $request->status;
            $course->save();

            $request->session()->flash('success', "Course updated successfully");
            return redirect()->route('ab.courses');
        }

        //pluck data
        $colleges = self::getData('colleges');

        $course->data = json_decode($course->data);

        return view('ab.courses.edit', compact('course', 'colleges'));
    }

    //Delete
    public function delete(Request $request, Courses $course)
    {
        $course->delete();
        $request->session()->flash('success', 'Course deleted successfully');
        return redirect()->route("ab.courses");
    }

    //Show
    public function show(Request $request, Courses $course)
    {

        return view('ab.courses.show', compact('course'));
    }


    //data
    protected function getData($data){
        if($data == 'colleges'){
            return Colleges::where('status', 'active')->pluck('name', 'id');
        }
    }



}
