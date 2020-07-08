@extends('dashboard.layouts.app', ['activePage' => 'icons', 'menuParent' => 'components', 'titlePage' => __('Icons')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="container-fluid">
        <div class="header text-center">
          <h3 class="title">Material Design Icons</h3>
          <p class="category">Handcrafted by our friends from
            <a target="_blank" href="https://design.google.com/icons/">Google</a>
          </p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-body">
                <div class="iframe-container d-none d-lg-block">
                  <iframe src="https://design.google.com/icons/">
                    <p>Your browser does not support iframes.</p>
                  </iframe>
                </div>
                <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                  <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the
                    <a href="https://design.google.com/icons/" target="_blank">Material Icons</a>
                  </h5>
                </div>
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