@extends('app')
@section('content')
<?php
/*
	* Filename: item\create.blade.php
*/
?>
<div class="container fluid">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">Add Item</div>
	<div class="panel-body">
		@if ($errors->any())
			<div class='flash alert-danger'>
		@foreach ($errors->all() as $error)
		<p>{{ $error }}</p>
		@endforeach
		</div>
		@endif
		
		{!! Form::model(new App\Item, ['class' => 'form-horizontal', 'route' => ['item.store']]) !!}
		
		@include('Item/form/form', ['submit_text' => 'Add Data'])
		
		{!! Form::close() !!}
		
		</div>
		</div>
		</div>
		</div>
		</div>
@endsection