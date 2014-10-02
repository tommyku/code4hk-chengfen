@extends('layouts.base')

@section('title')
View
@stop

@section('body')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <td>Created</td>
	      <td>Photo</td>
	      <td>Text</td>
	      <td>Location</td>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($records as $r)
	    <tr>
	      <td>{{ $r->created_at }}</td>
	      <td><img src="{{ asset('res/'.$r->image) }}" /></td>
	      <td>{{ $r->message }}</td>
	      <td>coming soon</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
      </div>
      <!-- /.row (nested) -->
    </div>
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@stop

@section('afterjs')
@stop
