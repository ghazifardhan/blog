<!--
Filename: item\form\form.blade.php
-->
<div class="form-group">
{!! Form::label('serial_number', 'Serial Number', array('class' => 'col-md-4 control-label')) !!}
<div class="col-md-6">
{!! Form::text('serial_number', null, array('class' => 'form-control'),'') !!}
</div>
</div>
<div class="form-group">
{!! Form::label('item_name', 'Item Name', array('class' => 'col-md-4 control-label')) !!}
<div class="col-md-6">
<input type="text" class="form-control" name="item_name" value="<?php echo $item->item_name;?>" readonly>
</div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
{!! Form::submit($submit_text, ['class' => 'btn primary']) !!}
</div>
</div>