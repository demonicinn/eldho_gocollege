<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    protected $fillable = [
        'name',
        'image',
        'rating',
        'testimonial',
        'status',
    ];


    protected $appends = ['image_path'];


    public function getImagePathAttribute(){
        if($this->image){
            return asset('storage/testimonials/'.$this->image);
        }
        return '';
    }
}
