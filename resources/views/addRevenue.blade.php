@extends('layouts.default')
@section('title','新增收入')
@section('content')
<div class="addBody" >
	<h1 style="text-align: center;">新增收入</h1>
	<form method="post" action="#" class="form-horizontal">
		<div class="form-group">
	    <label for="money" class="col-sm-2 control-label">金额：</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="money" name="money" placeholder="(元)">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="time" class="col-sm-2 control-label">时间：</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="time" name="time" placeholder="xxxx-xx-xx">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="type" class="col-sm-2 control-label">类别：</label>
	    <div class="col-sm-3">
	    <select name="type" class="form-control">
	    	<option value="#">1</option>
	    	<option value="#">2</option>
	    	<option value="#">3</option>
	    </select>
		</div>
	  </div>
	  <div class="form-group">
	    <label for="address" class="col-sm-2 control-label">地点：</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="address" name="address" placeholder="具体地点">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="mark" class="col-sm-2 control-label">备注：</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control" id="mark" name="mark" placeholder="备注信息">
	    </div>
	  </div>
	  <input class="btn btn-success" type="submit" value="保存" style="margin-left: 400px;">
	  <a href="#">
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