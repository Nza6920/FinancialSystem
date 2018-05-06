@extends('layouts.default')
@section('title','系统设置')
@section('content')
<div class="body">
	<h1 style="text-align: center;">系统设置</h1>
</div>
@include('session._errors')
<form action="{{ route('resetPsw') }}" method="POST">
	{{ csrf_field() }}
	<div class="formBody">
	<div class="form-group">
		<label for="password">请输入密码</label>
		<input type="password" name="password" class="form-control" placeholder="请输入密码">
	</div>
	<div class="button pull-right">
  	<input class="btn btn-success" type="submit" value="设置">
 	 <a href="{{ route('home.show') }}">
  	 <input class="btn btn-primary" type="button" value="取消">
  	 </a>
    </div>
	</div>
</form>
<div style="height: 200px;"></div>
@stop
<style>
	div.addBody{
		margin-top: 50px;
	}
	div.formBody{
		width: 400px;
		margin: auto;
	}
</style>
