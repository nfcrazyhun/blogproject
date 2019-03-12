@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    @include('admin/includes/adminMenu')

    <div class="col-sm-10 pt-4">
        @include('/includes/messages')

        <h2>List of posts</h2>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts->all() as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>
                        {{--<a href="{{route('posts.show',$post->id)}}">-=SHOW=-</a>--}}
                        <a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a>
                    </td>
                    <td>{!! strip_tags(htmlspecialchars_decode(\Illuminate\Support\Str::limit($post->body,128))) !!}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        @if(isset($post->updated_at))
                            {{$post->updated_at->diffForHumans()}}
                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <!-- Pagination -->
        {!!$posts->render()!!}
    </div>

@stop