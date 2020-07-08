@extends('dashboard.layouts.app', ['activePage' => 'form_extended', 'menuParent' => 'forms', 'titlePage' => __('Extended Forms')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-icon">
              <i class="material-icons">today</i>
            </div>
            <h4 class="card-title">Datetimepicker</h4>
          </div>
          <div class="card-body ">
            <div class="form-group">
              <input type="text" class="form-control datetimepicker" value="11/06/2018">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-icon">
              <i class="material-icons">library_books</i>
            </div>
            <h4 class="card-title">Date Picker</h4>
          </div>
          <div class="card-body ">
            <div class="form-group">
              <input type="text" class="form-control datepicker" value="10/06/2018">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card ">
          <div class="card-header card-header-rose card-header-text">
            <div class="card-icon">
              <i class="material-icons">av_timer</i>
            </div>
            <h4 class="card-title">Time Picker</h4>
          </div>
          <div class="card-body ">
            <div class="form-group">
              <input type="text" class="form-control timepicker" value="10/05/2016">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <h4 class="title">Switches</h4>
                <div class="togglebutton">
                  <label>
                    <input type="checkbox" checked="">
                    <span class="toggle"></span>
                    Toggle is on
                  </label>
                </div>
                <div class="togglebutton">
                  <label>
                    <input type="checkbox">
                    <span class="toggle"></span>
                    Toggle is off
                  </label>
                </div>
              </div>
              <div class="col-md-6">
                <h4 class="title">Customisable Select</h4>
                <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-3">
                    <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
                      <option disabled selected>Single Option</option>
                      <option value="2">Foobar</option>
                      <option value="3">Is great</option>
                      <option value="4">Is bum</option>
                      <option value="5">Is wow</option>
                      <option value="6">boom</option>
                    </select>
                  </div>
                  <div class="col-lg-5 col-md-6 col-sm-3">
                    <select class="selectpicker" data-style="select-with-transition" multiple title="Choose City" data-size="7">
                      <option disabled> Multiple Options</option>
                      <option value="2">Paris </option>
                      <option value="3">Bucharest</option>
                      <option value="4">Rome</option>
                      <option value="5">New York</option>
                      <option value="6">Miami </option>
                      <option value="7">Piatra Neamt</option>
                      <option value="8">Paris </option>
                      <option value="9">Bucharest</option>
                      <option value="10">Rome</option>
                      <option value="11">New York</option>
                      <option value="12">Miami </option>
                      <option value="13">Piatra Neamt</option>
                      <option value="14">Paris </option>
                      <option value="15">Bucharest</option>
                      <option value="16">Rome</option>
                      <option value="17">New York</option>
                      <option value="18">Miami </option>
                      <option value="19">Piatra Neamt</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4 class="title">Tags</h4>
                <input type="text" value="Amsterdam,Washington,Sydney,Beijing" class="form-control tagsinput" data-role="tagsinput" data-color="info">
              </div>
              <div class="col-md-6">
                <h4 class="title">Dropdown & Dropup</h4>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-3">
                    <div class="dropdown">
                      <button class="dropdown-toggle btn btn-primary btn-round btn-block" type="button" id="multiDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Multilevel Dropdown
                      </button>
                      <div class="dropdown-menu" aria-labelledby="multiDropdownMenu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Submenu action</a>
                          <a class="dropdown-item" href="#">Submenu action</a>
                          <a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Subsubmenu action 1</a>
                            <a class="dropdown-item" href="#">Subsubmenu action 2</a>
                          </div>
                          <a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Subsubmenu action 1</a>
                            <a class="dropdown-item" href="#">Subsubmenu action 2</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-3">
                    <div class="dropdown">
                      <button class="dropdown-toggle btn btn-primary btn-round btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Dropdown header</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-3 mx-auto">
                    <div class="dropup">
                      <button type="button" class="dropdown-toggle btn btn-primary btn-round btn-block" data-toggle="dropdown">
                        Dropup
                      </button>
                      <div class="dropdown-menu">
                        <h6 class="dropdown-header">Dropdown header</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4 class="title">Progress Bars</h4>
                <div class="progress progress-line-primary">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
                <div class="progress progress-line-info">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
                <div class="progress progress-line-danger">
                  <div class="progress-bar progress-bar-success" style="width: 35%">
                    <span class="sr-only">35% Complete (success)</span>
                  </div>
                  <div class="progress-bar progress-bar-warning" style="width: 20%">
                    <span class="sr-only">20% Complete (warning)</span>
                  </div>
                  <div class="progress-bar progress-bar-danger" style="width: 10%">
                    <span class="sr-only">10% Complete (danger)</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h4 class="title">Sliders</h4>
                <div id="sliderRegular" class="slider"></div>
                <br>
                <div id="sliderDouble" class="slider slider-info"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <h4 class="title">Regular Image</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="{{ asset('material') }}/img/image_placeholder.jpg" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="..." />
                    </span>
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-4">
                <h4 class="title">Avatar</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-circle">
                    <img src="{{ asset('material') }}/img/placeholder.jpg" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                  <div>
                    <span class="btn btn-round btn-rose btn-file">
                      <span class="fileinput-new">Add Photo</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="..." />
                    </span>
                    <br />
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end card -->
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>
@endpush