@if($article->status == 'published' && $article->publish_date < now()) 
    <div class="card card-plain card-blog">
        <div class="card-header card-header-image">
            <a href="{{ route('blog.article.show', $article->slug) }}">
                @if ($article->picture == '')
                    <img class="img img-raised" src="{{ asset('material') }}/img/bg10.jpg">
                @else
                    <img class="img img-raised" src="{{ $article->path() }}">
                @endif
            </a> 
            <div class="colored-shadow colored-shadow-big"
                style="background-image: url(&quot;../assets/img/bg5.jpg&quot;); opacity: 1;"></div>
        </div>
        <div class="card-body">
            <h6 class="card-category">
                <a href="{{ route('blog.category', $article->category->slug ) }}" class="text-dark">{{ $article->category->name }}</a>
            </h6>
            <h3 class="card-title">
                <a href="{{ route('blog.article.show', $article->slug) }}">{{ $article->title }}</a>
            </h3>
            <p class="card-tags">
                @foreach ($article->tags as $tag)
                <a href="{{ route('blog.tag', $tag->slug ) }}"><span class="badge badge-pill"
                        style="background-color:{{ $tag->color }}">{{ $tag->name }}</span></a>
                @endforeach
            </p>
            <h5 class="card-description">
                {{ $article->excerpt }}
            </h5>
            <p class="author">
                {{ __('by') }}
                <a href="{{ route('blog.author', $article->author->slug) }}">
                    <b>{{ $article->author->name }}</b>
                </a> &#8226; {{ $article->created_at->format('M d, Y') }} &#8226; {{ $article->read_time }}
                {{ __(' min read')}}
            </p>
            <a href="{{ route('blog.article.show', $article->slug) }}" class="btn btn-primary btn-round">{{ __('Read More') }}</a>
        </div>
    </div>
@endif