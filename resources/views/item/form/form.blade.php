<!--
<div class="form-group">
{!! Form::label('id', 'Item ID', array('class' => 'col-md-4 control-label')) !!}
<div class="col-md-6">
{!! Form::text('id', null, array('class' => 'form-control'),'') !!}
</div>
</div>
-->
<div class="form-group">
{!! Form::label('item_name', 'Item Name', array('class' => 'col-md-4 control-label')) !!}
<div class="col-md-6">
{!! Form::text('item_name', null, array('class' => 'form-control'),'') !!}
</div>
</div>
<div class="form-group">
{!! Form::label('item_type', 'Item Type', array('class' => 'col-md-4 control-label')) !!}
<div class="col-md-6">
{!! Form::text('item_type', null, array('class' => 'form-control'),'') !!}
</div>
</div>
<div class="form-group">
{!! Form::label('screen_size', 'Screen Size', array('class' => 'col-md-4 control-label')) !!}
<div class="col-md-6">
{!! Form::text('screen_size', null, array('class' => 'form-control'),'') !!}
</div>
</div>
<div class="form-group">
{!! Form::label('ram', 'RAM', array('class' => 'col-md-4 control-label')) !!}
<div class="col-md-6">
{!! Form::text('ram', null, array('class' => 'form-control'),'') !!}
</div>
</div>
<div class="form-group">
{!! Form::label('internal', 'Internal', array('class' => 'col-md-4 control-label')) !!}
<div class="col-md-6">
{!! Form::text('internal', null, array('class' => 'form-control'),'') !!}
</div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
{!! Form::submit($submit_text, ['class' => 'btn primary']) !!}
</div>