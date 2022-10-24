@extends('layouts.dashboard.admin..app')

@section('link')
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset ('dashboard/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('dashboard/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset ('dashboard/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('dashboard/plugins/table/datatable/dt-global_style.css') }}">

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset ('dashboard/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset ('dashboard/assets/css/forms/theme-checkbox-radio.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('dashboard/assets/css/forms/switches.css') }}">
<!--  END CUSTOM STYLE FILE  -->
@endsection

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">
        <center>
            <div class="container">

                <div class="row layout-top-spacing">

                    <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>{{$penyakits->nama}}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content-area">
                                <div class="postbox__content">
                                    <div class="postbox__text mb-40 ml-2">
                                        <p class="text-left">{{$penyakits->keterangan}}</p>
                                        <p class="text-left">{{$penyakits->solusi}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</div>
</center>
</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->
@endsection

@section('script')
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ ('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ ('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ ('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ ('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ ('assets/js/app.js') }}"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ ('plugins/highlight/highlight.pack.js') }}"></script>
<script src="{{ ('assets/js/custom.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="{{ ('assets/js/scrollspyNav.js') }}"></script>
@endsection
