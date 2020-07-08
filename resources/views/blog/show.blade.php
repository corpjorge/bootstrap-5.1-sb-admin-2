@extends('blog.app', [
    'class' => 'blog-post',
    'headerImage' => $article->path() == '/storage/' ? '/material/img/dg3.jpg' : $article->path()
])

@section('header_content')
    <h1 class="title">
        {{ $article->title }}
    </h1>
    <h4>
        {{ $article->excerpt }}
    </h4>
@endsection

@section('content')
    <div class="container">
        <div class="section section-text">
            <div class="row">
                {!! $article->content !!}
            </div>
        </div>
        <div class="section section-blog-info">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="row text-center">
                        <div class="col-xl-6 text-xl-left">
                            <div class="blog-tags">
                                <span class="d-none d-sm-inline">{{ __('Published on ')}}</span>{{ $article->publish_date->format('M j, Y')  }} &#8226; {{ $article->read_time}}{{ __(' min read') }}
                            </div>
                            <div class="blog-tags">
                                {{ __('Tags:') }}
                                @foreach ($article->tags as $tag)
                                    <a href="{{ route('blog.tag', $tag->slug ) }}"><span style="background-color: {{ $tag->color }};" class="badge badge-pill">{{ $tag->name }}</span></a>
                                @endforeach
                            </div>
                            <div class="blog-tags">
                                {{ __('Category:') }}
                                <a href="{{ route('blog.category', $article->category->slug ) }}">{{ $article->category->name }}</a>
                            </div>
                        </div>
                        <div class="col-xl-6 my-2">
                            <a href="#pablo" class="btn btn-google btn-round">
                                <i class="fa fa-google"></i><span class="d-none d-sm-inline"> {{ __('232') }}</span>
                            </a>
                            &nbsp;
                            <a href="#pablo" class="btn btn-twitter btn-round">
                                <i class="fa fa-twitter"></i><span class="d-none d-sm-inline"> {{ __('910') }}</span>
                            </a>
                            &nbsp;
                            <a href="#pablo" class="btn btn-facebook btn-round ">
                                <i class="fa fa-facebook-square"></i><span class="d-none d-sm-inline"> {{ __('872') }}</span>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="card card-profile card-plain">
                        <div class="row text-center">
                            <div class="col-lg-2">
                                <div class="card-avatar">
                                    <a href="{{ route('blog.author', $article->author->slug) }}">
                                        <img class="img" src="{{ $article->author->profilePicture() }}">
                                    </a>
                                    <div class="ripple-container"></div>
                                </div>
                            </div>
                            <div class="col-lg-8 text-lg-left">
                                <h4 class="card-title">{{ $article->author->name }} </h4>
                                <p class="description">
                                    @if ($article->author->about == '')
                                        {{ __('Not enough energy to write a description right now. All my writting speaks for me otherwise.') }}
                                    @else
                                        {{ $article->author->about }}
                                    @endif
                                    </p>
                            </div>
                            <div class="col-lg-2">
                                <a class="btn btn-default btn-round" href="{{ route('blog.author', $article->author->slug) }}">{{ __('Read All') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-comments">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="media-area">
                        <h3 id="comments" class="title text-center">{{ $article->comments->count() . __(' Comments') }}</h3>
                        @foreach($article->comments as $comment)
                            @include("blog._partials.comments",['comment' => $comment])
                        @endforeach
                    </div>
                </div>
            </div>
            @auth
            <div class="col-md-8 ml-auto mr-auto">
                <form method="post" enctype="multipart/form-data" action="{{ route('blog.comments.store', $article->slug) }}"
                    autocomplete="off" class="form-horizontal">
                    @csrf
                    <h3 class="title text-center">{{ __('Post your comment') }}</h3>
                    <div class="media media-post">
                        <a class="author float-left d-none d-sm-inline" href="{{ route('blog.author', $article->author->slug) }}">
                            <div class="avatar">
                                <img class="media-object" alt="" src="{{ auth()->user()->profilePicture() }}">
                            </div>
                        </a>
                        <div class="media-body">
                            <div class="form-group label-floating bmd-form-group{{old('parent_id')===null && $errors->has('content') ? ' has-danger' : '' }}">
                                <label class="form-control-label bmd-label-floating"
                                    for="exampleBlogPost">{{ __(' Write some nice stuff or nothing...') }}</label>
                                <textarea class="form-control" rows="5" name="content" id="content"></textarea>
                                @if(old('parent_id')===null)
                                @include('dashboard.alerts.feedback', ['field' => 'content'])
                                @endif
                            </div>
                            <div class="media-footer">
                                <button type="submit"
                                    class="btn btn-primary btn-round btn-wd float-right">{{ __('Post Comment') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @endauth
            
            @guest
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-3 ml-auto mr-auto">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <input style="display:none" name="id_article" value="{{ $article->slug }}">
            
                            <div class="card card-login card-hidden">
                                <div class="card-header card-header-rose text-center">
                                    <h4 class="card-title">{{ __('Please log in to comment') }}</h4>
                                </div>
                                <div class="card-body ">
                                    <span class="form-group  bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">email</i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" id="exampleEmails" name="email"
                                                placeholder="{{ __('Email...') }}" value="{{ old('email', 'member@material.com') }}"
                                                required>
                                            @include('dashboard.alerts.feedback', ['field' => 'email'])
                                        </div>
                                    </span>
                                    <span class="form-group bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" id="examplePassword" name="password"
                                                placeholder="{{ __('Password...') }}" value="secret" required>
                                            @include('dashboard.alerts.feedback', ['field' => 'password'])
                                        </div>
                                    </span>
                                    <div class="form-check mr-auto ml-3 mt-3">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-rose btn-link btn-lg">{{ __('Lets Go') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endguest
        </div>
        <div style="display:none" id="replyForm" class="col-md-8 ml-auto mr-auto">
            <form method="post" enctype="multipart/form-data" action="{{ route('blog.comments.store', $article->slug) }}"
                autocomplete="off" class="form-horizontal">
                @csrf
                <input name="parent_id" type="hidden" class="parentValue" value="">
                <div class="media media-post">
                    <a class="author float-left d-none d-sm-inline" href="{{ route('blog.author', $article->author->slug) }}">
                        <div class="avatar">
                            <img class="media-object" alt="" src="">
                        </div>
                    </a>
                    <div class="media-body">
                        <div class="form-group label-floating bmd-form-group {{old('parent_id')===null && $errors->has('content') ? ' has-danger' : '' }}" >
                            <label class="form-control-label bmd-label-floating"
                                for="exampleBlogPost">{{ __(' Write some nice stuff or nothing...') }}</label>
                            <textarea class="form-control" rows="5" name="content" id="content"></textarea>
                        </div>
                        <div class="media-footer">
                            <button type="submit"
                                class="btn btn-primary btn-round btn-wd float-right">{{ __('Post Comment') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-center">{{ __('More ') }}<a href="{{ route('blog.category', $article->category->slug) }}">{{ $article->category->name }}</a>{{ __(' Articles') }}</h2>
                        <div class="row">
                            @foreach ($moreArticles as $categoryArticle)
                                <div class="col-md-4">
                                    <div class="card card-blog">
                                        <div class="card-header card-header-image">
                                            <a href="{{ route('blog.article.show', $categoryArticle->slug) }}">
                                                <img class="img img-raised" src="{{ $categoryArticle->path() == '/storage/' ? '/material/img/dg3.jpg' : $categoryArticle->path() }}">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="{{ route('blog.article.show', $categoryArticle->slug) }}">{{ $categoryArticle->title }}</a>
                                            </h4>
                                            <p class="card-tags">
                                                @foreach ($categoryArticle->tags as $tag)
                                                    <a href="{{ route('blog.tag', $tag->slug) }}"><span style="background-color: {{ $tag->color }}" class="badge badge-pill">{{ $tag->name }}</span></a>
                                                @endforeach
                                            </p>
                                            <p class="card-description">
                                                {{ $categoryArticle->excerpt }}
                                                <a href="{{ route('blog.article.show', $categoryArticle->slug) }}">{{ __('Read More') }}</a>
                                            </p>
                                            <p class="author">
                                                {{ __('by') }}
                                                <a href="{{ route('blog.author', $categoryArticle->author->slug )}}">
                                                    <b>{{ $categoryArticle->author->name }}</b>
                                                </a> &#8226; {{ $categoryArticle->publish_date->format('M j, Y') }} &#8226; {{ $categoryArticle->read_time . ' min read' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(
            function(){
                $('.reply-button').click(function() {
                    if ($(this).parents('.content-comment').find('form').length == 0) {
                        var htmlForm = $('#replyForm').html();
                        var $form = $(htmlForm);
                        var parentId = $(this).attr('data-parent-id');
                        $form.find('.parentValue').val(parentId);
                        $(this).parents('.content-comment').append($form);
                    }
                    else{
                        $(this).parents('.content-comment').find('form').remove();
                    }
                })
                $('body').on('click' ,'.label-floating .form-control', function() {
                    $(this).parent().addClass('is-focused');
                });
                $('body').on('blur' ,'.label-floating .form-control', function() {
                    $(this).parent().removeClass('is-focused');
                });
            }
        )
    </script>
@endpush