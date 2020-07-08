@extends('dashboard.layouts.app', ['activePage' => 'dashboard', 'menuParent' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                  <i _ngcontent-lmj-c19="" class="material-icons icon-image-preview">format_align_left</i>
              </div>
              <h4 class="card-title">Top articles per tag</h4>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12">
                  <div class="table-responsive table-sales">
                    <table class="table">
                      <tbody>
                        @foreach($query as $que)
                        <tr>
                          <td>
                            <div class="flag">
                              @foreach($tags as $tag)
                                @if($tag->name == $que->name)
                                <span class="badge badge-default" style="background-color:{{ $tag->color }}">{{ $tag->name }}</span> 
                                @endif
                                @endforeach
                          </div>
                          </td>
                          <td>{{ $que->title }}</td>
                          <td class="text-right">
                              {{ $que->comm }} comments
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-icon card-header-primary">
                  <div class="card-icon">
                      <i _ngcontent-lmj-c19="" class="material-icons icon-image-preview">format_align_left</i>
                  </div>
                  <h4 class="card-title">Published articles
                  </h4>
                </div>
                <div class="card-body">
                  <div id="colouredRoundedLineChart" class="ct-chart"></div>
                </div>
              </div>
            </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header card-header-icon card-header-info">
                <div class="card-icon">
                    <i _ngcontent-uff-c19="" class="material-icons icon-image-preview">people</i>
                </div>
                <h4 class="card-title">New authors/members
                </h4>
              </div>
              <div class="card-body">
                <div id="colouredBarsChart" class="ct-chart"></div>
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
      var articles = {!! json_encode($articles->toArray()) !!};
      var users = {!! json_encode($users->toArray()) !!};
      articles_date = [];
      $.each(articles, function(i,val){
        val = moment(val.publish_date, 'YYYY-MM-DD hh:mm');
        articles_date.push(val.format('YYYY-MM-DD'));
      })
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      materialKitDemo.initCharts(articles_date,users);
    });
  </script>
@endpush