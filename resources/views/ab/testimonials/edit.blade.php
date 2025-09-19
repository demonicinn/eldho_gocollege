@extends('layouts.ab')
@section('title', 'Edit Testimonial')
@section('content')


    {{ html()->model($testimonial)->form('PATCH', route('ab.testimonials.edit', $testimonial->id))->acceptsFiles()->open() }}

    <div class="row"> 
        @include('ab.testimonials.form', ['formTitle'=>'Edit', 'submitBtn'=>'Update'])

    </div>

    {{ html()->form()->close() }}

@endsection
