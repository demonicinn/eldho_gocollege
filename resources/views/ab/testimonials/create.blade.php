@extends('layouts.ab')
@section('title', 'Add Testimonial')
@section('content')



    {{ html()->form('POST', route('ab.testimonials.create'))->acceptsFiles()->open() }}

    <div class="row"> 
    @include('ab.testimonials.form', ['formTitle'=>'Add New', 'submitBtn'=>'Create'])

    </div>
    
    {{ html()->form()->close() }}
    

@endsection
