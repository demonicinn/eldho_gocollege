<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colleges extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        
        'meta_title',
        'meta_keyword',
        'meta_description',

        'status',
    ];


    protected $appends = ['image_path'];


    public function getImagePathAttribute(){
        if($this->image){
            return asset('storage/colleges/'.$this->image);
        }
        return '';
    }

}
