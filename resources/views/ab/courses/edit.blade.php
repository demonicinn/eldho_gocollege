@extends('layouts.ab')
@section('title', 'Edit Course')
@section('content')


    {{ html()->model($course)->form('PATCH', route('ab.courses.edit', $course->id))->acceptsFiles()->open() }}

    <div class="row"> 
        @include('ab.courses.form', ['formTitle'=>'Edit', 'submitBtn'=>'Update'])

        @include('ab.metatags')
    </div>

    {{ html()->form()->close() }}

@endsection
