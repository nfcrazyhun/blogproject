@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    @include('admin/includes/adminMenu')

    <div class="col-sm-10 pt-4">
        @include('/includes/messages')
        <h2>Update Category</h2>

        <div class="row">
            {{--create--}}
            <div class="col-sm-8">

                <!-- Create category form -->
                {!! Form::model($categories, ['method'=>'PATCH','action'=>['AdminCategoriesController@update',$categories->id]]) !!}
                @csrf
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                {!!'<br>'!!}
                {{--//buttons--}}
                <div class="form-group">
                    {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                    <div class="form-group float-right">
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy', $categories->id]]) !!}
                        {!! Form::submit('Delete category',['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

            <!--Delete button-->


            {!! Form::close() !!}


        </div>
    </div>


    </div>
@stop