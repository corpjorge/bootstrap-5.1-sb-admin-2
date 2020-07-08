<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <div class="navbar-translate">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation" data-target="#pagesNav">
                <span class="sr-only">{{ ('Toggle navigation') }}</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="pagesNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link"><strong>{{ __('Homepage') }}</strong></a>
                </li>
                @foreach ($navCategories as $category)
                    <li class="nav-item">
                        <a href="{{ route('blog.category', $category->slug) }}" class="nav-link"><strong>{{ $category->name }}</strong></a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a href="{{ route('blog.article.index') }}" class="nav-link"><strong>{{ __('All Articles') }}</strong></a>
                </li>
            </ul>

            <form action="{{ route('blog.search') }}" class="form-inline ml-auto">
                <div class="form-group no-border nav-category-search">
                    <input type="text" class="form-control" name="searching" placeholder="Search">
                </div>
                <button type="submit" style="margin-right: 30px;" class="btn btn-white btn-just-icon btn-round">
                    <i class="material-icons">{{ ('search') }}</i>
                </button>
            </form>
        </div>
    </div>
</nav>