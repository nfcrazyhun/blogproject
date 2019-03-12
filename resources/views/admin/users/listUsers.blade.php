@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    @include('admin/includes/adminMenu')

    <div class="col-sm-10 pt-4">
        @include('/includes/messages')

        <h2>List of users</h2>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th>Status</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users->all() as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active':'Not Active'}}</td>
                <td>
                    <a href="{{route('users.edit',$user->id)}}">
                    {{$user->name}}
                    </a>
                </td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

        <!-- Pagination -->
        {!!$users->render()!!}
</div>

@stop