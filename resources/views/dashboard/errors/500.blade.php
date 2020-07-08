@extends('errors.layout', ['classPage' => 'error-page', 'activePage' => '500', 'title' => __('Material Dashboard'), 'pageBackground' => asset("material").'/img/clint-mckoy.jpg'])

@section('content')
  <div class="content-center">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title">500</h1>
        <h2>{{ __('Server Error :') }}(</h2>
        <h4>{{ __('Ooooups! Looks like something went wrong') }}</h4>
      </div>
    </div>
  </div>
@endsection