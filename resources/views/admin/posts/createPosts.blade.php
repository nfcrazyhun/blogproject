@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    @include('admin/includes/adminMenu')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

    <div class="col-sm-10 pt-4">
        <h2>Create post</h2>

        <!-- Create user form -->
        <div class="form-group">
            {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store']) !!}
            @csrf
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [null=>'Choose...']+$categories, null, ['class'=>'form-control','required']) !!}
            {!!'<br>'!!}
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control  ckeditor']) !!}
            {!!'<br>'!!}
            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        <!--Display errors-->
        @include('includes/errors')
    </div>
@stop