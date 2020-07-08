<div class="media ml-4 ml-sm-0">
    <a class="float-left d-none d-sm-block" href="{{ route('blog.author', $children->author->slug) }}">
        <div class="avatar">
            <img class="media-object" alt="64x64" src="{{ $children->author->profilePicture() }}">
        </div>
    </a>
    <div class="media-body">
        <h4 class="media-heading">{{ $children->author->name }}
            <small>&#xB7;
                @if ($children->created_at->diffInDays(now()) > 0)
                    {{ $children->created_at->diffInDays(now()) }} {{ _(' Days Ago') }}
                @elseif ($children->created_at->diffInHours(now()) > 0)
                    {{ $children->created_at->diffInHours(now()) }} {{ _(' Hours Ago') }}
                @elseif ($children->created_at->diffInMinutes(now()) > 0)
                    {{ $children->created_at->diffInMinutes(now()) }} {{ _(' Minutes Ago') }}
                @else
                    {{ $children->created_at->diffInSeconds(now()) }} {{ _(' Seconds Ago') }}
                @endif

            </small>
        </h4>
        <p>{{ $children->content }}</p>
        <div class="media-footer">
            <a class="btn btn-primary btn-link float-right reply-button" rel="tooltip" title="Reply to Comment"
                data-parent-id="{{ $comment->id }}">
                <i class="material-icons">reply</i> Reply
            </a>
            <a href="#pablo" class="btn btn-link btn-secondary float-right">
                <i class="material-icons">favorite</i> 2
            </a>
        </div>
    </div>
</div>