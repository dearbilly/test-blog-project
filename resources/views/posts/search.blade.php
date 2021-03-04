@extends('layouts.layout')

@section('title', 'Blog:: Qidiruv natijasi')

@section('content')
    <main class="posts-listing col-lg-8">
        <div class="container">
            <div class="post col-xl-6">
                {{ $s }}
            </div>
            <div class="row">
                <!-- post -->

                @foreach($posts as $post)
                    <div class="post col-xl-6">
                        <div class="post-thumbnail"><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class="animsition-link"><img
                                    src="{{ $post->getImage() }}" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date meta-last">20 May | 2016</div>
                                <div class="category"><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">{{ $post->category->title }}</a></div>
                            </div>
                            <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class="animsition-link">
                                <h3 class="h4">{{ $post->title }}</h3></a>
                            <p class="text-muted">{!! $post->description !!}</p>
                            <footer class="post-footer d-flex align-items-center">
                                <div class="date"><i class="icon-clock"></i>{{ $post->getPostDate() }}</div>
                                <div class="comments meta-last"><i class="icon-eye"></i>{{ $post->views }}</div>
                            </footer>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                {{ $posts->appends(['s' => request()->s])->links() }}
{{--                <ul class="pagination pagination-template d-flex justify-content-center">--}}
{{--                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link active">1</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">2</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">3</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>--}}
{{--                </ul>--}}
            </nav>
        </div>
    </main>
@endsection
