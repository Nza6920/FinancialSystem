@extends('layouts.default')
@if($pay->id)
	@section('title','编辑支出')
@else
	@section('title','新增支出')
@endif
@section('content')
<div class="addBody" >
	@if($pay->id)
		<h1 style="text-align: center;">编辑支出</h1>
	@else
		<h1 style="text-align: center;">新增支出</h1>
	@endif
	@include('session._errors')
	@include('session._message')
	@if($pay->id)
			<form method="POST" action="{{ route('pay.update',$pay->id) }}" class="form-horizontal">
	@else
			<form method="POST" action="{{ route('pay.create') }}" class="form-horizontal">
	@endif
			{{ csrf_field() }}
		<div class="form-group">
	    <label for="money" class="col-sm-2 control-label">金额：</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="money" name="money" placeholder="(元)" value="{{ old('money',round($pay->money,2)) }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="time" class="col-sm-2 control-label">时间：</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="time" name="time" placeholder="xxxx-xx-xx" value="{{ old('time',$pay->time) }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="type" class="col-sm-2 control-label">类别：</label>
	    <div class="col-sm-3">
	    <select name="type" class="form-control">
				<option value="" {{ $pay->id ? '' : 'selected' }}>请选择分类</option>
				<option value="餐费" {{ strcmp($pay->type,"餐费") == 0 ? 'selected' : '' }}>餐费</option>
				<option value="应酬" {{ strcmp($pay->type,"应酬") == 0 ? 'selected' : '' }}>应酬</option>
				<option value="礼金" {{ strcmp($pay->type,"礼金") == 0 ? 'selected' : '' }}>礼金</option>
				<option value="车费" {{ strcmp($pay->type,"车费") == 0 ? 'selected' : '' }}>车费</option>
				<option value="其他" {{ strcmp($pay->type,"其他") == 0 ? 'selected' : '' }}>其他</option>
	    </select>
		</div>
	  </div>
	  <div class="form-group">
	    <label for="address" class="col-sm-2 control-label">地点：</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="address" name="address" placeholder="具体地点" value="{{ old('address',$pay->address) }}">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="mark" class="col-sm-2 control-label">备注：</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="mark" name="mark" placeholder="备注信息" value="{{ old('mark',$pay->mark) }}">
	    </div>
	  </div>
	  <input class="btn btn-success" type="submit" value="保存" style="margin-left: 400px;">
	  <a href="{{ route('home.show') }}">
	  <input class="btn btn-primary" type="button" value="取消">
	  </a>
	</form>
</div>
@stop

<style>
	div.addBody{
		margin-top: 50px;
	}
	form{
		margin-left:450px;
	}
</style>
