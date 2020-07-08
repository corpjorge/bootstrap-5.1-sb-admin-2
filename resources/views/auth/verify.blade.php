@extends('dashboard.layouts.app', [
    'class' => 'off-canvas-sidebar',
    'classPage' => 'login-page',
    'activePage' => '',
    'title' => __('Material Dashboard'),
    'pageBackground' => asset("material").'/img/bg3.jpg'
])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="card card-login card-hidden mb-3">
                    <div class="card-header card-header-rose text-center">
                        <p class="card-title"><strong>{{ __('Verify Your Email Address') }}</strong></p>
                    </div>
                    <div class="card-body">
                        <p class="card-description text-center"></p>
                        <p>
                            {{ __('Before proceeding, please check your email for a verification link.') }}

                            @if (Route::has('verification.resend'))
                            {{ __('If you did not receive the email') }}, <a
                                href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            @if (session('resent'))
                $.notify({
                    icon: "done",
                    message: "{{ __('A fresh verification link has been sent to your email address.') }}"
                }, {
                    type: 'success',
                    timer: 3000,
                    placement: {
                        from: 'top',
                        align: 'right'
                    }
                });
            @endif

            md.checkFullPageBackgroundImage();
            setTimeout(function () {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700);
        });
    </script>
@endpush