@extends('dashboard.layouts.app', ['activePage' => 'tag-management', 'menuParent' => 'laravel', 'titlePage' => __('Tag Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('tag.update', $tag) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">label</i>
                </div>
                <h4 class="card-title">{{ __('Edit Tag') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('tag.index') }}" class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $tag->name) }}" required="true" aria-required="true"/>
                      @include('dashboard.alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Slug') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" id="input-slug" type="text" placeholder="{{ __('Slug') }}" value="{{ old('slug', $tag->slug) }}" required="true" aria-required="true"/>
                      @include('dashboard.alerts.feedback', ['field' => 'slug'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Color') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" id="input-color" type="color" placeholder="{{ __('Color') }}" value="{{ old('color', $tag->color) }}" required="true" aria-required="true"/>
                      @include('dashboard.alerts.feedback', ['field' => 'color'])
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
    <script>
        $(document).ready(function () {
            $(document).on('blur', 'input#input-name', function () {
                if (!$('input#input-slug').val()) {
                    setSlug($('input#input-name'), $('input#input-slug'));
                }
            })
        });
        
    </script>
@endpush