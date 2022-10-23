@extends('layouts.dashboard.admin..app')

@section('link')
<link href="{{ ('dashboard/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ ('dashboard/assets/js/loader.js') }}"></script>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ ('dashboard/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ ('dashboard/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{ ('dashboard/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ ('dashboard/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endsection

@section('content')
<div id="content" class="main-content">
  <div class="layout-px-spacing">

    <div class="row layout-top-spacing">

      <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
          Welcome {{ auth()->user()?->name }}
        </div>
      </div>

    </div>

  </div>
</div>
@endsection

@section('script')
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ ('dashboard/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ ('dashboard/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ ('dashboard/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ ('dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ ('dashboard/assets/js/app.js') }}"></script>
<script>
  $(document).ready(function() {
    App.init();
  });

</script>
<script src="{{ ('dashboard/assets/js/custom.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ ('dashboard/plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ ('dashboard/assets/js/dashboard/dash_2.js') }}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
