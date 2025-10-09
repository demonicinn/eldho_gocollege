<?php

    //...
    function statusArray(){
        return [
            '' => 'Select Status',
            'active' => 'Active',
            'inactive' => 'Inactive'
        ];
    }

    function statusValue($key){
        $array = statusArray();
        return $array[$key];
    }
	


    //...
    function imagesMime(){
        return explode(',', str_replace('.', '', config('app.mimes')));
    }

    function imagesMimeText(){
        return implode(',', imagesMime());
    }


    //...
    function categoriesArray(){
        return [
            'accounting' => 'Accounting',
            'business' => 'Business',
            'healthcare' => 'Healthcare',
            'it' => 'Information Technology'
        ];
    }

    function categoriesValue($key){
        $array = categoriesArray();
        return $array[$key];
    }

	
	//...
    function ratingArray(){
        return [
            '5' => 'Excellent',
            '4' => 'Very Good',
            '3' => 'Average',
            '2' => 'Poor',
            '1' => 'Terrible',
        ];
    }


    //...
    function testimonials(){
        return \App\Models\Testimonial::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
    }

    //...
    function keyPoints(){
        return [
            'Duration',
            'Salary Range',
            'Campus',
            'Partner Colleges',
            'Delivery Method',
            'Language',
            'Financial Aid',
            'Certification',
        ];
    }



