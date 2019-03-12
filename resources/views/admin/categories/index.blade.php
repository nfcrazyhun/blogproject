@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    @include('admin/includes/adminMenu')

    <div class="col-sm-10 pt-4">
        @include('/includes/messages')
        <h2>Manage Categories</h2>

        <div class="row">
            {{--create--}}
            <div class="col-sm-8">

                <!-- Create category form -->
                    {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}
                    @csrf
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        {!! '<br>' !!}
                        {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}


            </div>
            {{--list--}}
            <div class="col-sm-4 pb-4">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cats Name</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories->all() as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>
                                <a href="{{route('categories.edit',$cat->id)}}">{{$cat->name}}</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@stop