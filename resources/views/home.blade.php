@extends('dashboard.layouts.app', [
  'class' => 'off-canvas-sidebar',
  'classPage' => 'login-page',
  'activePage' => '',
  'title' => __('Material Dashboard'),
  'pageBackground' => asset("material").'/img/bg3.jpg'
])


@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card card-login card-hidden mb-3">
        <div class="card-header card-header-primary text-center">
          <h4>Dashboard</h4>
        </div>

        <div class="card-body">
          You are logged in!
        </div>
      </div>
    </div>
  </div>
</div>
@endsection