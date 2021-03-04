<aside class="col-lg-4">
    <!-- Widget [Search Bar Widget]-->
{{--    <div class="widget search">--}}
{{--        <header>--}}
{{--            <h3 class="h6">Search the blog</h3>--}}
{{--        </header>--}}
{{--        <form action="#" class="search-form">--}}
{{--            <div class="form-group">--}}
{{--                <input type="search" placeholder="What are you looking for?">--}}
{{--                <button type="submit" class="submit"><i class="icon-search"></i></button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
    <!-- Widget [Latest Posts Widget]        -->
    <div class="widget latest-posts">
        <header>
            <h3 class="h6">Popular Posts</h3>
        </header>
        @foreach($popular_posts as $post)
            <div class="blog-posts"><a href="{{ route('posts.single', ['slug' => $post->slug]) }}">
                    <div class="item d-flex align-items-center">
                        <div class="image"><img src="{{ $post->getImage() }}" alt="..."
                                                class="img-fluid"></div>
                        <div class="title"><strong>{{ $post->title }}</strong>
                            <div class="d-flex align-items-center">
                                <div class="views"><i class="icon-eye"></i> {{ $post->views }}</div>
                            </div>
                        </div>
                    </div>
                </a><a href="{{ route('posts.single', ['slug' => $post->slug]) }}"></a>
            </div>
        @endforeach
    </div>
    <!-- Widget [Categories Widget]-->
    <div class="widget categories">
        <header>
            <h3 class="h6">Categories</h3>
        </header>
        @foreach($cats as $cat)
        <div class="item d-flex justify-content-between">
            <a href="{{ route('categories.single', ['slug' => $cat->slug]) }}">{{ $cat->title }}</a>
            <span>{{ $cat->posts_count }}</span></div>
        @endforeach
    </div>
    <!-- Widget [Tags Cloud Widget]-->
    <div class="widget tags">
        <header>
            <h3 class="h6">Tags</h3>
        </header>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
            <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
            <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
            <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
            <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
        </ul>
    </div>
</aside>
