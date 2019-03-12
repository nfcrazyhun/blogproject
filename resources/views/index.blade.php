@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')

    <div class='col-md-12'>

        @foreach($blogs as $blog)
            <article class="card my-5">
                <header class="card-header">
                    <a href='/blog/{{ $blog->id }}'><h1>{{{ $blog->title }}}</h1></a>
                    <span>Submitted in: {{date('Y F j, G:i', strtotime($blog->created_at)) }}</span>
                </header>
                <div class="card-body">
                    {!! strip_tags(htmlspecialchars_decode(\Illuminate\Support\Str::limit($blog->body,120,'...'))) !!}
                    <a href='/blog/{{ $blog->id }}'>{{'Read_more...'}}</a>
                </div>
                <footer class="card-footer">
                    {{ 'Category: '.$blog->category->name}}
                </footer>
            </article>
        @endforeach()

    </div>
    <!-- Pagination -->
    {!! $blogs->render() !!}
@stop