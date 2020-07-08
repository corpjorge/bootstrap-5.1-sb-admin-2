<div class="col-md-6">
    <div class="card card-profile card-plain">
        <div class="row">
            <div class="col-md-5">
                <div class="card-header card-header-image">
                    <a href="{{ route('blog.author', $author->slug) }}">
                        <img class="img img-raised" src="{{ $author->profilePicture() }}">
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <a href="{{ route('blog.author', $author->slug) }}">
                        <h4 class="card-title">{{ $author->name }}</h4>
                    </a>
                    <p class="card-description">
                        @if ($author->about == '')
                            {{ __('Not enough energy to write a description right now. All my writting speaks for me otherwise.') }}
                        @else
                            {{ $author->about }}
                        @endif
                    </p>
                </div>
                <div class="card-footer">
                    @if ($author->twitter)
                        <a href="{{ $author->twitter }}" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i
                            class="fa fa-twitter"></i></a>
                    @endif
                    @if ($author->facebook)
                    <a href="{{ $author->facebook }}" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i
                            class="fa fa-facebook-square"></i></a>
                    @endif
                    @if ($author->youtube)
                    <a href="{{ $author->youtube }}" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i
                            class="fa fa-youtube"></i></a>
                    @endif
                    @if ($author->linkedin)
                    <a href="{{ $author->linkedin }}" class="btn btn-just-icon btn-link btn-white" target="_blank" rel="nofollow"><i
                            class="fa fa-linkedin"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>