<?php

namespace App\Http\Controllers\Ab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    //index
    public function index(Request $request)
    {
        $testimonialsData = Testimonial::where(function ($query) use ($request) {
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

        return view('ab.testimonials.index', compact('testimonialsData'));
    }

    //create - store
    public function create(Request $request)
    {
        if($request->isMethod('POST')){
            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'required|image|max:1024',
                'rating' => 'required',
                'testimonial' => 'required',
                'status' => 'required',
            ]);
            
            $store = new Testimonial;
            $store->name = $request->name;
            $store->rating = $request->rating;
            $store->testimonial = $request->testimonial;

            //...image
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalName();
                $file->storeAs('testimonials', $filename, 'public');
                //...
                $store->image = $filename;
            }

            //...
            $store->status = $request->status;
            $store->save();
            
            $request->session()->flash('success', "New Testimonial added successfully");
            return redirect()->route('ab.testimonials');
        }

        return view('ab.testimonials.create');
    }

    //edit - update
    public function edit(Request $request, Testimonial $testimonial)
    {
        if($request->isMethod('PATCH')){
            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|max:1024',
                'rating' => 'required',
                'testimonial' => 'required',
                'status' => 'required',
            ]);

            $testimonial->name = $request->name;
            $testimonial->rating = $request->rating;
            $testimonial->testimonial = $request->testimonial;

            //...image
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalName();
                $file->storeAs('testimonials', $filename, 'public');
                //...
                $testimonial->image = $filename;
            }

            //...
            $testimonial->status = $request->status;
            $testimonial->save();

            $request->session()->flash('success', "Testimonial updated successfully");
            return redirect()->route('ab.testimonials');
        }

        return view('ab.testimonials.edit', compact('testimonial'));
    }

    //Delete
    public function delete(Request $request, Testimonial $testimonial)
    {
        $testimonial->delete();
        $request->session()->flash('success', 'Testimonial deleted successfully');
        return redirect()->route("ab.testimonials");
    }

    //Show
    public function show(Request $request, Testimonial $testimonial)
    {

        return view('ab.testimonials.show', compact('testimonial'));
    }
}
