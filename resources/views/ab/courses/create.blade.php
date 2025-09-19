@extends('layouts.ab')
@section('title', 'Add Course')
@section('content')



    {{ html()->form('POST', route('ab.courses.create'))->acceptsFiles()->open() }}

    <div class="row"> 
    @include('ab.courses.form', ['formTitle'=>'Add New', 'submitBtn'=>'Create'])

    @include('ab.metatags')
    </div>
    
    {{ html()->form()->close() }}
    

@endsection
