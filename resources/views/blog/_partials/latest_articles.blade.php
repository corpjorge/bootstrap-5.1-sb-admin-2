<div class="col-md-4">
    <div class="card card-plain card-blog">
        <div class="card-header card-header-image">
            <a href="{{ route('blog.article.show', $article->slug) }}">
                @if ($article->picture == '')
                    <img class="img img-raised" src="{{ asset('material') }}/img/bg5.jpg">
                @else
                    <img class="img img-raised" src="{{ $article->path() }}">
                @endif
            </a>
        </div>
        <div class="card-body">
            <h6 class="card-category">
            <a href="{{ route('blog.category', $article->category->slug ) }}" class="text-dark">{{ $article->category->name }}</a>
            </h6>
            <h4 class="card-title">
                <a href="{{ route('blog.article.show', $article->slug) }}">{{ $article->title }}</a>
            </h4>
            <p class="card-tags">
                @foreach ($article->tags as $tag)
                    <a href="{{ route('blog.tag', $tag->slug ) }}"><span style="background-color: {{ $tag->color }};" class="badge badge-pill">{{ $tag->name }}</span></a>
                @endforeach
            </p>
            <p class="card-description">
                {{ $article->excerpt }}
                <a href="{{ route('blog.article.show', $article->slug) }}"> {{ __('Read More') }} </a>
            </p>
            <p class="author">
                {{ __('by') }}
                <a href="{{ route('blog.author', $article->author->slug) }}">
                    <b>{{ $article->author->name }}</b>
                </a> &#8226; {{ $article->publish_date->format('M j, Y')  }} &#8226; {{ $article->read_time }} {{ __('min read') }}
            </p>
        </div>
    </div>
</div>