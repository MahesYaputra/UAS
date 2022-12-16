<div class="form-group {{ $errors->has('stock_id') ? 'has-error' : ''}}">
    <label for="stock_id" class="control-label">{{ 'Stock Id' }}</label>
    <input class="form-control" name="stock_id" type="text" id="stock_id" value="{{ isset($detail->stock_id) ? $detail->stock_id : ''}}" >
    {!! $errors->first('stock_id', '<p class="help-block">:message</p>') !!}
</div>
<br>
<div class="form-group {{ $errors->has('loopkey') ? 'has-error' : ''}}">
    <label for="loopkey" class="control-label">{{ 'Loopkey' }}</label>
    <input class="form-control" name="loopkey" type="text" id="loopkey" value="{{ isset($detail->loopkey) ? $detail->loopkey : ''}}" >
    {!! $errors->first('loopkey', '<p class="help-block">:message</p>') !!}
</div>
<br>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status" >
    @foreach (json_decode('{"Available": "Available", "Sold": "Sold"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($detail->status) && $detail->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<br>
<div class="form-group {{ $errors->has('customer_id') ? 'has-error' : ''}}">
    <label for="customer_id" class="control-label">{{ 'Customer Id' }}</label>
    <input class="form-control" name="customer_id" type="text" id="customer_id" value="{{ isset($detail->customer_id) ? $detail->customer_id : ''}}" >
    {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
</div>
<br>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
