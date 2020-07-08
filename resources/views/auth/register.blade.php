@extends('dashboard.layouts.app', [
    'class' => 'off-canvas-sidebar',
    'classPage' => 'register-page',
    'activePage' => 'register',
    'title' => __('Material Dashboard'),
    'pageBackground' => asset("material").'/img/bg3.jpg'
])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="card card-signup">
                    <h2 class="card-title text-center">{{ __('Register') }}</h2>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="info info-horizontal">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">timeline</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">{{ __('Marketing') }}</h4>
                                        <p class="description">
                                            {{ __('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">code</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">{{ __('Fully Coded in HTML5') }}</h4>
                                        <p class="description">
                                            {{ __('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-info">
                                        <i class="material-icons">group</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">{{ __('Built Audience') }}</h4>
                                        <p class="description">
                                            {{ __('There is also a Fully Customizable CMS Admin Dashboard for this product.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mr-auto">
                                <div class="social text-center">
                                    <button class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook"> </i>
                                    </button>
                                    <h4 class="mt-3"> or be classical </h4>
                                </div>
                                <form class="form" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="has-default{{ $errors->has('name') ? ' has-danger' : '' }} mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                                            @if ($errors->has('name'))
                                            <div id="name-error" class="error text-danger pl-3" for="name"
                                                style="display: block;">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="has-default{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">mail</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="email"
                                                placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                            <div id="email-error" class="error text-danger pl-3" for="name"
                                                style="display: block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="has-default{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">recent_actors</i>
                                                </span>
                                            </div>
                                            <select class="selectpicker" style="display:inline-block;" name="user_type"
                                                data-style="select-with-transition" title="" data-size="100">
                                                <option value="" disabled selected hidden>{{ __('User Type') }}</option>
                                                <option value="1" @if (old('user_type')=='1' ) selected="selected" @endif>
                                                    {{ __('Admin') }}</option>
                                                <option value="2" @if (old('user_type')=='2' ) selected="selected" @endif>
                                                    {{ __('Creator') }}</option>
                                                <option value="3" @if (old('user_type')=='3' ) selected="selected" @endif>
                                                    {{ __('Member') }}</option>
                                            </select>
                                            @if ($errors->has('user_type'))
                                                <div id="email-error" class="error text-danger pl-3" for="name"
                                                    style="display: block;">
                                                    <strong>{{ $errors->first('user_type') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="has-default{{ $errors->has('password') ? ' has-danger' : '' }} mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" placeholder="{{ __('Password...') }}"
                                                class="form-control" required>
                                            @if ($errors->has('password'))
                                            <div id="password-error" class="error text-danger pl-3" for="password"
                                                style="display: block;">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="has-default mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" name="password_confirmation" id="password_confirmation"
                                                class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="policy" value="1"
                                                {{ old('policy', 1) ? 'checked' : '' }}>
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                            {{ __('I agree with the ') }} <a href="#">{{ __('terms and conditions') }}</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-primary btn-round mt-4">{{ __('Get Started') }}</button>
                                    </div>
                                </form>
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
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
    });
  </script>
@endpush
