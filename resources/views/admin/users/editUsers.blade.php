@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    @include('admin/includes/adminMenu')

    <div class="col-sm-10 pt-4">
        <h2>EDIT User</h2>

        <div class="form-group">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update',$user->id]]) !!}
            @csrf
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(0=>'Not Active', 1=>'Active'), $user->is_active, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::email('email', $user->email, ['class'=>'form-control']) !!}
            {!!'<br>'!!}
            @if(isset($user->updated_at))
                {{'Updated: '.$user->updated_at->diffForHumans()}}
            @endif
            {!!'<br>'!!}
            <!--buttons button-->
            <div class="form-group">
            {!! Form::submit('Edit User',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
            <!--Delete button-->
                <div class="form-group float-right">
                    {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy', $user->id]]) !!}
                    {!! Form::submit('Delete user',['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>


        <!--Display errors-->
        @include('includes/errors')
    </div>
@stop