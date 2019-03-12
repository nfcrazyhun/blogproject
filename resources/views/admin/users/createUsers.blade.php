@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    @include('admin/includes/adminMenu')

    <div class="col-sm-10 pt-4">
        <h2>Create User</h2>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}

    <!-- Create user form -->
            @csrf
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', [null=>'Choose...']+$roles, null, ['class'=>'form-control','required']) !!}
            {!!'<br>'!!}
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', null, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}

        <!--Display errors-->
        @include('includes/errors')
    </div>
@stop