@extends('errors.layout', ['classPage' => 'error-page', 'activePage' => '419', 'title' => __('Material Dashboard'), 'pageBackground' => asset("material").'/img/clint-mckoy.jpg'])

@section('content')
  <div class="content-center">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title">419</h1>
        <h2>{{ __('Page expired :') }}(</h2>
        <h4>{{ __('Ooooups! Looks like your token has expired.') }}</h4>
      </div>
    </div>
  </div>
@endsection

