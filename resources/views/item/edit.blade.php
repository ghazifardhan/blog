@extends('app')
@section('content')
<?php error_reporting(1) ?>
<!--
File Name: item\edit.blade.php
-->
<div class="container-fluid">
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">Edit Item</div>
		<div class="panel-body">
		@if ($errors->any())
			<div class='flash alert-danger'>
		@foreach($errors->all() as $error)
		<p>{{$error}}</p>
		@endforeach
		</div>
		@endif
		{!! Form::model($item, ['method' => 'PATCH', 'route' => ['item.update', $item->id], 'class' => 'form-horizontal']) !!}
		@include('item/form/form', ['submit_text' => 'Edit Data'])
		{!! Form::close() !!}
		</div>
		</div>
		</div>
		</div>
		</div>
@endsection