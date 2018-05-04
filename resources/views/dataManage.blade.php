@extends('layouts.default')
@section('title','数据管理')
@section('content')
<div class="body">
	<h1 style="text-align: center;">数据管理</h1>
</div>
<div id="change">
<ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active" id="change"><a href="#">收入汇总 <span class="glyphicon glyphicon-play"></span></a></li>
  <li role="presentation" class="active" id="change"><a href="#">支出汇总<span class="glyphicon glyphicon-play"></span></a></li>
  <li role="presentation" class="active" id="change"><a href="#">便签信息 <span class="glyphicon glyphicon-play"></span></a></li>
</ul>
</div>
<div style="height: 250px;"></div>


@stop
<style>
	div.addBody{
		margin-top: 50px;
	}
	div#change{
	 	margin-left: 580px;
	 	margin-top: 40px;
	}
	li#change{
		margin-left: 20px; 
	}
</style>