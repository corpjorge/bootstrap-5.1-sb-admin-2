@extends('dashboard.layouts.app', ['activePage' => 'sweet-alert', 'menuParent' => 'components', 'titlePage' => __('Sweet Alert')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="header text-center">
        <h3 class="title">Sweet Alert 2</h3>
        <p class="category">A beautiful plugin, that replace the classic alert, Handcrafted by our friend
          <a target="_blank" href="https://twitter.com/t4t5">Tristan Edwards</a>. Please check out the
          <a href="https://github.com/sweetalert2/sweetalert2" target="_blank">full documentation.</a>
        </p>
      </div>
      <div class="places-sweet-alerts">
        <div class="row">
          <div class="col-md-3">
            <div class="card ">
              <div class="card-body text-center">
                <h5 class="card-text">Basic example</h5>
                <button class="btn btn-rose btn-fill" onclick="demo.showSwal('basic')">Try me!</button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-body text-center">
                <h5 class="card-text">A title with a text under</h5>
                <button class="btn btn-rose btn-fill" onclick="demo.showSwal('title-and-text')">Try me!</button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-body text-center">
                <h5 class="card-text">A success message</h5>
                <button class="btn btn-rose btn-fill" onclick="demo.showSwal('success-message')">Try me!</button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-body text-center">
                <h5 class="card-text">Custom HTML description</h5>
                <button class="btn btn-rose btn-fill" onclick="demo.showSwal('custom-html')">Try me!</button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-body text-center">
                <h5 class="card-text">A warning message, with a function attached to the "Confirm" Button...</h5>
                <button class="btn btn-rose btn-fill" onclick="demo.showSwal('warning-message-and-confirmation')">Try me!</button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-body text-center">
                <h5 class="card-text">...and by passing a parameter, you can execute something else for "Cancel"</h5>
                <button class="btn btn-rose btn-fill" onclick="demo.showSwal('warning-message-and-cancel')">Try me!</button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-body text-center">
                <h5 class="card-text">A message with auto close timer set to 2 seconds</h5>
                <button class="btn btn-rose btn-fill" onclick="demo.showSwal('auto-close')">Try me!</button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-body text-center">
                <h5 class="card-text">Modal window with input field</h5>
                <button class="btn btn-rose btn-fill" onclick="demo.showSwal('input-field')">Try me!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script>
    $(document).ready(function() {
      // Initialise Sweet Alert library
      demo.showSwal();
    });
  </script>
@endpush