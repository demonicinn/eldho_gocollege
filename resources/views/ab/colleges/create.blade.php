@extends('layouts.ab')
@section('title', 'Add College')
@section('content')



    {{ html()->form('POST', route('ab.colleges.create'))->acceptsFiles()->open() }}

    <div class="row"> 
    @include('ab.colleges.form', ['formTitle'=>'Add New', 'submitBtn'=>'Create'])

    @include('ab.metatags')
    </div>
    
    {{ html()->form()->close() }}
    

@endsection
