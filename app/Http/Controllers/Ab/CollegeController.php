<?php

namespace App\Http\Controllers\Ab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colleges;
use Illuminate\Support\Str;

class CollegeController extends Controller
{
    //index
    public function index(Request $request)
    {
        $collegesData = Colleges::where(function ($query) use ($request) {
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

        return view('ab.colleges.index', compact('collegesData'));
    }

    //create - store
    public function create(Request $request)
    {
        if($request->isMethod('POST')){
            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'required|image|max:1024',
                'status' => 'required',
            ]);
            
            $store = new Colleges;
            $store->name = $request->name;
            $store->slug = Str::slug($request->name, '-');
            $store->description = $request->description;

            //...image
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalName();
                $file->storeAs('colleges', $filename, 'public');
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
            
            $request->session()->flash('success', "New College added successfully");
            return redirect()->route('ab.colleges');
        }

        return view('ab.colleges.create');
    }

    //edit - update
    public function edit(Request $request, Colleges $college)
    {
        if($request->isMethod('PATCH')){
            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|max:1024',
                'status' => 'required',
            ]);

            $college->name = $request->name;
            $college->slug = Str::slug($request->name, '-');
            $college->description = $request->description;

            //...image
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalName();
                $file->storeAs('colleges', $filename, 'public');
                //...
                $college->image = $filename;
            }

            //...meta tags
            $college->meta_title = $request->meta_title;
            $college->meta_keyword = $request->meta_keyword;
            $college->meta_description = $request->meta_description;
            
            //...
            $college->status = $request->status;
            $college->save();

            $request->session()->flash('success', "College updated successfully");
            return redirect()->route('ab.colleges');
        }

        return view('ab.colleges.edit', compact('college'));
    }

    //Delete
    public function delete(Request $request, Colleges $college)
    {
        $college->delete();
        $request->session()->flash('success', 'College deleted successfully');
        return redirect()->route("ab.colleges");
    }

    //Show
    public function show(Request $request, Colleges $college)
    {

        return view('ab.colleges.show', compact('college'));
    }
}
