@extends('dashboard.layouts.app', [
    'activePage' => 'article-management',
    'menuParent' => 'laravel',
    'titlePage' => __('Article Management')
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">filter_none</i>
                            </div>
                            <h4 class="card-title">{{ __('Articles') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('article.create') }}"
                                        class="btn btn-sm btn-rose">{{ __('Add article') }}</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    style="display:none">
                                    <thead class="text-primary">
                                        <th>
                                            {{ __('Title') }}
                                        </th>
                                        <th>
                                            {{ __('Category') }}
                                        </th>
                                        <th>
                                            {{ __('Picture') }}
                                        </th>
                                        <th>
                                            {{ __('Tags') }}
                                        </th>
                                        <th>
                                            {{ __('Publish date') }}
                                        </th>
                                        @can('manage-articles', App\User::class)
                                        <th class="text-right">
                                            {{ __('Actions') }}
                                        </th>
                                        @endcan
                                    </thead>
                                    <tbody>
                                        @foreach($articles as $article)
                                        <tr>
                                            <td style="width:20%;">
                                                {{ $article->title }}
                                            </td>
                                            <td>
                                                {{ $article->category->name }}
                                            </td>
                                            <td>
                                                <img src="{{ $article->path() }}" alt="" style="max-width: 200px;">
                                            </td>
                                            <td>
                                                @foreach ($article->tags as $tag)
                                                <span class="badge badge-default"
                                                    style="background-color:{{ $tag->color }}">{{ $tag->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                {{ $article->publish_date->format('Y-m-d') }}
                                            </td>
                                            @can('manage-articles', App\User::class)
                                            @if (auth()->user()->can('update', $article) || auth()->user()->can('delete',
                                            $article))
                                            <td class="td-actions text-right">
                                                <form action="{{ route('article.destroy', $article) }}" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    @can('update', $article)
                                                    <a rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('article.edit', $article) }}" data-original-title=""
                                                        title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    @endcan
                                                    @can('delete', $article)
                                                    <button type="button" class="btn btn-danger btn-link"
                                                        data-original-title="" title=""
                                                        onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                    @endcan
                                                </form>
                                            </td>
                                            @endif
                                            @endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('#datatables').fadeIn(1100);
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search articles",
                },
                "columnDefs": [
                    { "orderable": false, "targets": 5 },
                ],
            });
        });
    </script>
    
@endpush