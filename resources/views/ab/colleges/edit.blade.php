@extends('layouts.ab')
@section('title', 'Edit College')
@section('content')


    {{ html()->model($college)->form('PATCH', route('ab.colleges.edit', $college->id))->acceptsFiles()->open() }}

    <div class="row"> 
        @include('ab.colleges.form', ['formTitle'=>'Edit', 'submitBtn'=>'Update'])

        @include('ab.metatags')
    </div>

    {{ html()->form()->close() }}

@endsection
