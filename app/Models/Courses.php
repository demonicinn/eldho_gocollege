<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //
    protected $fillable = [
        'college_id',
        'category',
        
        'title',
        'sub_title',
        'slug',
        'image',
        'description',

        'data',
        'program',
        'learn',
        'jobTitle',
        'workEnvironments',
        'key_points',

        'meta_title',
        'meta_keyword',
        'meta_description',

        'status',
    ];

    protected $appends = ['image_path'];


    public function getImagePathAttribute(){
        if($this->image){
            return asset('storage/courses/'.$this->image);
        }
        return '';
    }


    //........
    public function college(){
        return $this->belongsTo(Colleges::class, 'college_id');
    }

}