@extends('dashboard.layouts.app', ['class' => 'off-canvas-sidebar', 'classPage' => 'lock-page', 'activePage' => 'lock', 'title' => __('Material Dashboard'), 'pageBackground' => asset("material").'/img/lock.jpg'])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 ml-auto mr-auto">
      <div class="card card-profile text-center card-hidden">
        <div class="card-header ">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="{{ asset('material') }}/img/faces/avatar.jpg">
            </a>
          </div>
        </div>
        <div class="card-body ">
          <h4 class="card-title">{{ __('Tania Andrew') }}</h4>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">{{ __('Enter Password') }}</label>
            <input type="password" class="form-control" id="exampleInput1">
          </div>
        </div>
        <div class="card-footer justify-content-center">
          <a href="#pablo" class="btn btn-rose btn-round">{{ __('Unlock') }}</a>
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
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
@endpush
