
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 mt-4">
            <h2 class="mb-3">{{ $post->title }}</h2>
    
            <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-success">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-danger">{{ $post->category->name }}</a></p>
            
            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden" >
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt" alt="{{ $post->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
            @endif
        
            <article class="my-4 fs-6">
                {!! $post->body !!}
            </article>
        
            <div class="d-md-block">
                <a href="/posts" class="btn btn-outline-primary  mt-3 btn-sm ">Back to Posts</a>
            </div>
        </div>
    </div>
</div>

@endsection