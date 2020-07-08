@extends('dashboard.layouts.app', ['activePage' => 'user-management', 'menuParent' => 'laravel', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" enctype="multipart/form-data" action="{{ route('user.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')
            <div class="card ">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">person</i>
                </div>
                <h4 class="card-title">{{ __('Add User') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('user.index') }}" class="btn btn-sm btn-rose">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Profile photo') }}</label>
                  <div class="col-sm-7">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail img-circle">
                        <img src="{{ asset('material') }}/img/placeholder.jpg" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                      <div>
                        <span class="btn btn-rose btn-file">
                          <span class="fileinput-new">{{ __('Select image') }}</span>
                          <span class="fileinput-exists">{{ __('Change') }}</span>
                          <input type="file" name="photo" id = "input-picture" />
                        </span>
                          <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> {{ __('Remove') }}</a>
                      </div>
                      @include('dashboard.alerts.feedback', ['field' => 'photo'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @include('dashboard.alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Slug') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" id="input-slug" type="text" placeholder="{{ __('Slug') }}" value="{{ old('slug') }}" required="true" aria-required="true"/>
                      @include('dashboard.alerts.feedback', ['field' => 'slug'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('About') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('about') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" id="input-about" type="text" placeholder="{{ __('About') }}" value="{{ old('about') }}" required="true" aria-required="true"/>
                      @include('dashboard.alerts.feedback', ['field' => 'about'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Facebook') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('facebook') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" id="input-facebook" type="text" placeholder="{{ __('Facebook') }}" value="{{ old('facebook') }}"/>
                      @include('dashboard.alerts.feedback', ['field' => 'facebook'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Twitter') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('twitter') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" id="input-twitter" type="text" placeholder="{{ __('Twitter') }}" value="{{ old('twitter') }}"/>
                      @include('dashboard.alerts.feedback', ['field' => 'twitter'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Youtube') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('youtube') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('youtube') ? ' is-invalid' : '' }}" name="youtube" id="input-youtube" type="text" placeholder="{{ __('Youtube') }}" value="{{ old('youtube') }}"/>
                      @include('dashboard.alerts.feedback', ['field' => 'youtube'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Linkedin') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('linkedin') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" name="linkedin" id="input-linkedin" type="text" placeholder="{{ __('Linkedin') }}" value="{{ old('linkedin') }}"/>
                      @include('dashboard.alerts.feedback', ['field' => 'linkedin'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required />
                      @include('dashboard.alerts.feedback', ['field' => 'email'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Role') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('role_id') ? ' has-danger' : '' }}">
                      <select class="selectpicker col-sm-12 pl-0 pr-0" name="role_id" data-style="select-with-transition" title="" data-size="100">
                        <option value="1" @if (old('role_id') == '1') selected="selected" @endif>{{ __('Admin') }}</option>
                        <option value="2" @if (old('role_id') == '2') selected="selected" @endif>{{ __('Creator') }}</option>
                        <option value="3" @if (old('role_id') == '3') selected="selected" @endif>{{ __('Member') }}</option>
                      </select>
                      @include('dashboard.alerts.feedback', ['field' => 'role_id'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="password" name="password" id="input-password" placeholder="{{ __('Password') }}" />
                      @include('dashboard.alerts.feedback', ['field' => 'password'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm Password') }}" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">{{ __('Add User') }}</button>
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