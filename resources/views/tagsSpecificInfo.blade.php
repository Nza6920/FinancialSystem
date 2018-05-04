@extends('layouts.default')
@section('title','编辑')
@section('content')
<div class="header">
	<h1 style="text-align: center;">编辑便签</h1>
</div>
<div class="body">
	<form action="#" method="POST">
	<div class="form-group">
		<textarea class="form-control" rows="5" name="tags" id="change"></textarea>
	</div>
	<div class="button">
  	<input class="btn btn-success" type="submit" value="保存">
 	 <a href="#">
  	 <input class="btn btn-primary" type="button" value="返回">
  	 </a>
    </div>
	</form>
</div>

<div style="height: 100px;"></div>

@stop

<style>
	textarea#change{
		width: 600px;
		margin: auto;
	}
	div.button{
		width: 150px;
		margin: auto;
	}
</style>