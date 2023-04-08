
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justyfy-content-center">
        <div class="col-md-8 ">

            <h1 class="mb-3">{{$post->title}}</h1>

            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->Category->slug }}" class="text-decoration-none">{{ $post->category->name}}</a></p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
            alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-6">
                
                {!! $post->body !!}

            </article>
            
        </div>
    </div>
</div>
    
    
    
<br>
<a href="/posts" class="text-decoration-none">Back To Posts</a>
 
@endsection