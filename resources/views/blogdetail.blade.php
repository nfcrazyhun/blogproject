@extends('layouts.master')
@section('title', '-=app title-=')

@section('content')
    <div class='col-md-12'>
        <article class="card my-5">
            <header class="card-header">
                <a href='/blog/{{ $post->id }}'><h1>{{{ $post->title }}}</h1></a>
                <span>Submitted in: {{date('Y F j, G:i', strtotime($post->created_at)) }}</span>
            </header>
            <div class="card-body">
                {!! htmlspecialchars_decode($post->body) !!}
            </div>
            <footer class="card-footer">
                {{ 'Category: '.$post->category->name}}
            </footer>
        </article>
    </div>
@stop