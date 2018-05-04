@extends('layouts.default')
@section('title','收支标签')
@section('content')
<div class="body">
	<h1 style="text-align: center;">新增便签</h1>
</div>
<p class="text-danger" style="text-align: center;">请输入便签，最多200字</p>
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

@stop
<style>
	div.addBody{
		margin-top: 50px;
	}
	textarea#change{
		width: 600px;
		margin: auto;
	}
	div.button{
		width: 150px;
		margin: auto;
	}
</style>