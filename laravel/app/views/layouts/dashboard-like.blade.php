@extends('layouts.base')

@section('body')
<div id="wrapper">


  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">@yield('page-header')</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      @yield('page-content')
    </div>
    <!-- /.row -->
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@stop
