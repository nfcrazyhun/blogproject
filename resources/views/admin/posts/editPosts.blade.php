@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    @include('admin/includes/adminMenu')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

    <div class="col-sm-10 pt-4">
        <h2>Edit post</h2>

        <!-- Create user form -->
        <div class="form-group">
            {!! Form::model($post, ['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id]]) !!}
            @csrf
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', $categories, null, ['class'=>'form-control','required']) !!}
            {!!'<br>'!!}
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control ckeditor']) !!}
            {!!'<br>'!!}
            <!--buttons-->
            <div class="form-group">
            {!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
            <!--Delete button-->
                <div class="form-group float-right">
                    {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy', $post->id]]) !!}
                    {!! Form::submit('Delete post',['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>







        <!--Display errors-->
        @include('includes/errors')
    </div>
@stop