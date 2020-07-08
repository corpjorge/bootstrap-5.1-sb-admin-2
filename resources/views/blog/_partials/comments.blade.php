@if($comment->parent_id == 0)
    <div class="media">
        <a class="float-left d-none d-sm-block" href="{{ route('blog.author', $comment->author->slug) }}">
            <div class="avatar">
                <img class="media-object" src="{{ $comment->author->profilePicture() }}" alt="Picture profile">
            </div>
        </a>
        <div class="media-body content-comment pr-0">
            <h4 class="media-heading">{{$comment->author->name}}
                <small>&#xB7; 
                    @if ($comment->created_at->diffInDays(now())>0)
                        {{ $comment->created_at->diffInDays(now()) }} {{ __(' Days Ago') }}
                    @elseif( $comment->created_at->diffInHours(now())>0)
                        {{ $comment->created_at->diffInHours(now()) }} {{ __(' Hours Ago') }}
                    @elseif ($comment->created_at->diffInMinutes(now())>0)
                        {{ $comment->created_at->diffInMinutes(now()) }} {{ __(' Minutes Ago') }}
                    @else 
                        {{ $comment->created_at->diffInSeconds(now()) }} {{ __(' Seconds Ago') }}
                    @endif
                </small>
            </h4>
            <h6 class="text-muted"></h6>
            <p>{{$comment->content}}</p>
            <div class="media-footer">
                @guest
                <a href="{{route("login")}}" class="btn btn-primary btn-link float-right" rel="tooltip" title="Reply to Comment">
                    <i class="material-icons">reply</i>{{ __('Reply') }}
                </a>
                @endguest
                @auth
            <a class="btn btn-primary btn-link float-right reply-button" rel="tooltip" title="Reply to Comment" data-parent-id = "{{$comment->id}}">
                    <i class="material-icons">reply</i>{{ __('Reply') }}
                </a> 
                @endauth
            </div>
            @foreach($comment->childrens as $children)
                @include('blog._partials.reply_comments',['children'=>$children])
            @endforeach
            @auth
                @if($errors->has('content') && old('parent_id')!=0 && old('parent_id')==$comment->id)
                    <form method="post" enctype="multipart/form-data" action="{{ route('blog.comments.store', $article->id) }}"
                        autocomplete="off" class="form-horizontal">
                        @csrf
                        <input name="parent_id" type="hidden" class="parentValue" value="">
                        <div class="media media-post">
                            <a class="author float-left" href="{{ route('blog.author', user()->auth()->slug) }}">
                                <div class="avatar">
                                    <img class="media-object" alt="" src="{{ auth()->user()->profilePicture() }}">
                                </div>
                            </a>
                            <div class="media-body">
                                <div class="form-group label-floating bmd-form-group {{old('parent_id')!=null && $errors->has('content') ? ' has-danger' : '' }}" >
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
                @endif
            @endauth
        </div>
    </div>
@endif