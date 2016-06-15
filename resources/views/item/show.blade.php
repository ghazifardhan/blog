@extends('app')
@section('content')
<?php
/*
	* Filename: item\show.blade.php
*/
?>
<div class="container fluid">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">{{$item->id}} - {{$item->item_name}}</div>
	<div class="panel-body">
		<p>Screen Size: {{ $item->screen_size }}</p>
		<p>RAM: {{ $item->ram }}</p>
		<p>Internal: {{ $item->internal }}</p>
		<table class="table table-hover table-striped">
	<tr><th>Item Name</th><th>Serial Number</th><th>Edit</th><th>Delete</th></tr>
	@foreach($item->item_store as $item_store)
	<tr>
	<td>{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('item.destroy', $item->id, $item_store->id))) !!}
	<a href="{{ route('item.item_store.show', [$item->id, $item_store->id])}}">{{ $item_store->item_name }}</a></td>
	<td>{{ $item_store->serial_number }}</td>
	<td>{!! link_to_route('item.item_store.edit', 'Edit', array($item->id, $item_store->id), array('class' => 'btn btn-info')) !!}</td>
	<td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
		{!! Form::close() !!}
		</tr>
		@endforeach
		</table>
		<p>
		{!! link_to_route('item.index', 'Back To Data item') !!} |
		{!! link_to_route('item.item_store.create', 'Add Data item_store', $item->id) !!}
		</p>
		</div>
		</div>
		</div>
		</div>
		</div>
@endsection