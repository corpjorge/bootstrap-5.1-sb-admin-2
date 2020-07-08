@extends('dashboard.layouts.app', ['activePage' => 'google_maps', 'menuParent' => 'maps', 'titlePage' => __('Google Maps')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header card-header-text card-header-rose">
            <div class="card-text">
              <h4 class="card-title">Satellite Map</h4>
            </div>
          </div>
          <div class="card-body ">
            <h4 class="card-title"></h4>
            <div id="satelliteMap" class="map map-big"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-text card-header-rose">
            <div class="card-text">
              <h4 class="card-title">Regular Map</h4>
            </div>
          </div>
          <div class="card-body ">
            <h4 class="card-title"></h4>
            <div id="regularMap" class="map"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-text card-header-rose">
            <div class="card-text">
              <h4 class="card-title">Custom Skin & Settings Map</h4>
            </div>
          </div>
          <div class="card-body ">
            <h4 class="card-title"></h4>
            <div id="customSkinMap" class="map"></div>
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
    demo.initSmallGoogleMaps();
  });
</script>
@endpush