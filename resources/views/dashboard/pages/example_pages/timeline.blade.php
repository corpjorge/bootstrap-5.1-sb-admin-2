@extends('dashboard.layouts.app', ['activePage' => 'timeline', 'menuParent' => 'pages', 'titlePage' => __('Timeline')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="header text-center">
      <h3 class="title">Timeline</h3>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-timeline card-plain">
          <div class="card-body">
            <ul class="timeline">
              <li class="timeline-inverted">
                <div class="timeline-badge danger">
                  <i class="material-icons">card_travel</i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-danger">Some Title</span>
                  </div>
                  <div class="timeline-body">
                    <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                  </div>
                  <h6>
                    <i class="ti-time"></i> 11 hours ago via Twitter
                  </h6>
                </div>
              </li>
              <li>
                <div class="timeline-badge success">
                  <i class="material-icons">extension</i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-success">Another One</span>
                  </div>
                  <div class="timeline-body">
                    <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge info">
                  <i class="material-icons">fingerprint</i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-info">Another Title</span>
                  </div>
                  <div class="timeline-body">
                    <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                    <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                    <hr>
                  </div>
                  <div class="timeline-footer">
                    <div class="dropdown">
                      <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">build</i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge warning">
                  <i class="material-icons">flight_land</i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-pill badge-warning">Another One</span>
                  </div>
                  <div class="timeline-body">
                    <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                  </div>
                </div>
              </li>
            </ul>
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
      md.checkFullPageBackgroundImage();
    });
  </script>
@endpush