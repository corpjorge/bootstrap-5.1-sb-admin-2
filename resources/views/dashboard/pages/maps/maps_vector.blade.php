@extends('dashboard.layouts.app', ['activePage' => 'vector_maps', 'menuParent' => 'maps', 'titlePage' => __('Vector Map')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="header text-center">
        <h3 class="title">World Map</h3>
        <p class="category">Looks great on any resolution. Made by our friends from
          <a target="_blank" href="http://jvectormap.com/">jVector Map</a>.</p>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-body ">
              <div id="worldMap" class="map map-big"></div>
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
    md.initVectorMap();
  });
</script>
@endpush