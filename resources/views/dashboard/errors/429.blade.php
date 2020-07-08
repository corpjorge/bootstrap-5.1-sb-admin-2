@extends('errors.layout', ['classPage' => 'error-page', 'activePage' => '429', 'title' => __('Material Dashboard'), 'pageBackground' => asset("material").'/img/clint-mckoy.jpg'])

@section('content')
  <div class="content-center">
    <div class="row">
      <div class="col-md-12">
        <h1 class="title">429</h1>
        <h2>{{ __('Too Many Requests :') }}(</h2>
        <h4>{{ __('Ooooups! Looks like your did too many requests') }}</h4>
      </div>
    </div>
  </div>
@endsection

