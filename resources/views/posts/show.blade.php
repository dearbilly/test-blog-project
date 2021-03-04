@extends('layouts.layout')

@section('title', 'Blog :: ' . $post->title)

@section('content')
    <main class="post blog-post col-lg-8">
        <div class="container">
            <div class="post-single">
                <div class="post-thumbnail"><img src="{{ $post->getImage() }}" alt="..." class="img-fluid"></div>
                <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                        <div class="category"><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">{{ $post->category->title }}</a></div>
                    </div>
                    <h1>{{ $post->title }}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                    <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="date"><i class="icon-clock"></i>{{ $post->getPostDate() }}</div>
                            <div class="views"><i class="icon-eye"></i>{{ $post->views }}</div>
                        </div>
                    </div>
                    <div class="post-body">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
