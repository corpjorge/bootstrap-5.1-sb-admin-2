@extends('dashboard.layouts.app', [
    'activePage' => 'article-management',
    'menuParent' => 'laravel',
    'titlePage' => __('article Management')
])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="{{ route('article.update', $article) }}"
                        autocomplete="off" class="form-horizontal article-form">
                        @csrf
                        @method('put')
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">filter_none</i>
                                </div>
                                <h4 class="card-title">{{ __('Edit article') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('article.index') }}"
                                            class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Picture') }}</label>
                                    <div class="col-sm-7">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                @if ($article->picture)
                                                <img src="{{ $article->path() }}" alt="...">
                                                @else
                                                <img src="{{ asset('material') }}/img/image_placeholder.jpg" alt="...">
                                                @endif
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-file">
                                                    <span class="fileinput-new">{{ __('Select image') }}</span>
                                                    <span class="fileinput-exists">{{ __('Change') }}</span>
                                                    <input type="file" name="photo" id="input-picture" />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                    {{ __('Remove') }}</a>
                                            </div>
                                            @include('dashboard.alerts.feedback', ['field' => 'photo'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                name="title" id="input-title" type="text" placeholder="{{ __('Title') }}"
                                                value="{{ old('title', $article->title) }}" required="true"
                                                aria-required="true" />
                                            @include('dashboard.alerts.feedback', ['field' => 'title'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Slug') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                                name="slug" id="input-slug" type="text" placeholder="{{ __('Slug') }}"
                                                value="{{ old('slug', $article->slug) }}" required="true" aria-required="true" />
                                            @include('dashboard.alerts.feedback', ['field' => 'slug'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                                            <select class="selectpicker col-sm-12 pl-0 pr-0" name="category_id"
                                                data-style="select-with-transition" title="" data-size="100">
                                                <option value="">-</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == old('category_id', $article->category_id) ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @include('dashboard.alerts.feedback', ['field' => 'category_id'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Content') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                            <textarea  class="editor-content" id="editor" name="content">
                                                {!! old('content', $article->content) !!}
                                            </textarea>
                                            @include('dashboard.alerts.feedback', ['field' => 'content'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Excerpt') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('excerpt') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('excerpt') ? ' is-invalid' : '' }}"
                                                name="excerpt" id="input-excerpt" type="text" placeholder="{{ __('Excerpt') }}"
                                                value="{{ old('excerpt', $article ->excerpt) }}" required="true"
                                                aria-required="true" />
                                            @include('dashboard.alerts.feedback', ['field' => 'Excerpt'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Tags') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('tags') ? ' has-danger' : '' }}">
                                            <select class="selectpicker col-sm-12 pl-0 pr-0" name="tags[]"
                                                data-style="select-with-transition" multiple title="-" data-size="7">
                                                @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}"
                                                    {{ in_array($tag->id, old('tags', $article->tags->pluck('id')->toArray()) ?? []) ? 'selected' : '' }}>
                                                    {{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                            @include('dashboard.alerts.feedback', ['field' => 'tags'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label label-checkbox">{{ __('Status') }}</label>
                                    <div class="col-sm-10 checkbox-radios">
                                        <div class="togglebutton">
                                            <label>{{ __('Draft')}}
                                                <input type="checkbox" name="status" value="1"
                                                    {{ old('status',$article->status) == 'published' ? 'checked' : '' }}>
                                                <span class="toggle"></span>
                                                {{ __('Published')}}
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label
                                        class="col-sm-2 col-form-label label-checkbox">{{ __('Show on homepage') }}</label>
                                    <div class="col-sm-10 checkbox-radios">
                                        <label>
                                            <input type="checkbox" name="show_on_homepage" value="1"
                                                {{ old('show_on_homepage',$article->show_on_homepage) == 1 ? ' checked' : '' }}>
                                            <span class="toggle"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Read time') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('read_time') ? ' has-danger' : '' }}">
                                            <input type="number" name="read_time" id="read_time"
                                                placeholder="{{ __('Select read time') }}" class="form-control"
                                                value="{{ old('read_time',$article->read_time)}}" />
                                            @include('dashboard.alerts.feedback', ['field' => 'read_time'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Publish date') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                            <input type="text" name="publish_date" id="publish_date"
                                                placeholder="{{ __('Select publish date') }}"
                                                class="form-control datetimepicker" value="{{ old('publish_date', $article->publish_date
                          ? $article->publish_date->format('d-m-Y') : '') }}" />
                                            @include('dashboard.alerts.feedback', ['field' => 'publish_date'])
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script src="{{ asset('material') }}/js/article.js"></script> --}}
    <script>
        $(document).ready(function () {
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                    // $(this).append("<textarea name='content' style='display:none'>" + value + "</textarea>");
                } )
                .catch( error => {
                    console.error( error );
            } );
            $('.datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                },
                format: 'DD-MM-YYYY'
            });
            $(document).on('blur', 'input#input-title', function () {
                if (!$('input#input-slug').val()) {
                    setSlug($('input#input-title'), $('input#input-slug'));
                }
            })
        });
    </script>
@endpush