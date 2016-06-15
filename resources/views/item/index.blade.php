@extends('app')
@section('content')
<?php
/*
	* Filename: item\index.blade.php
*/
?>
<div class="container-fluid">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">Data Item</div>
	<div class="panel-body">
	
	<!-- Search Form -->
	<form method="get" action="{{ url('/result') }}">
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Project Name" aria-describedby="basic-addon2" name="search">
					<span class="input-group-btn"><button type="submit" name="submit" class="btn btn-default">Search</button></span>
				</div>
			</div>
		</div>
	</form>
	<br/>
	<!-- Search Form End Here-->
	
	<table class="table table-hover table-striped">
	<tr><th>ID</th><th>ITEM NAME</th><th>ITEM TYPE</th><th>Edit</th><th>Delete</th></tr>
	@foreach( $item as $item )
	<tr>
	{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('item.destroy', $item->id))) !!}
	<td><a href="{{ route('item.show', $item->id) }}">{{ $item->id }}</a></td>
	<td>{{ $item->item_name }}</td>
	<td>{{ $item->item_type }}</td>
	<td>{!! link_to_route('item.edit', 'Edit', array($item->id), array('class' => 'btn btn-info')) !!}</td>
	<td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
	{!! Form::close() !!}
	</tr>
	@endforeach
	</table>
	<p>
	{!! link_to_route('item.create', 'Add Data Item') !!}
	</p>
		</div>
		</div>
	</div>
	</div>
</div>
@endsection