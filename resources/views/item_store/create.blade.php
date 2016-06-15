@extends('app')
@section('content')

<div class="container fluid">
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">Add Item Data: {{ $item->item_name }}</div>
	<div class="panel-body">
	@if($errors->all())
		<div class='flash alert-danger'>
	@foreach ($errors->all() as $error)
	<p>{{$error}}</p>
	@endforeach
	</div>
	@endif
	
	{!! Form::model(new App\Item_Store, ['route' => ['item.item_store.store', $item->id], 'class'=>'form-horizontal']) !!}
	@include('item_store/form/form', ['submit_text' => 'Tambah Item_Store'])
	{!! Form::close() !!}
	</div>
	</div>
	</div>
	</div>
	</div>

@endsection