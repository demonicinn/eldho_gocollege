<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'career_description',

        'meta_title',
        'meta_keyword',
        'meta_description',

        'status',
    ];

    protected $appends = ['image_path', 'short_description'];


    public function getImagePathAttribute(){
        if($this->image){
            return asset('storage/courses/'.$this->image);
        }
        return '';
    }


    public function getShortDescriptionAttribute()
    {
        return Str::words(strip_tags($this->description), 15, '...');
    }


    //........
    public function college(){
        return $this->belongsTo(Colleges::class, 'college_id');
    }

}