@extends('layouts.default')
@section('title','便签信息')
@section('content')
<div class="body">
	<h1 style="text-align: center;">便签信息</h1>
</div>
<div id="change">
<ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active" id="change"><a href="#">收入汇总 <span class="glyphicon glyphicon-play"></span></a></li>
  <li role="presentation" class="active" id="change"><a href="#">支出汇总<span class="glyphicon glyphicon-play"></span></a></li>
  <li role="presentation" class="active" id="change"><a href="#">便签信息 <span class="glyphicon glyphicon-play"></span></a></li>
</ul>
</div>
<div class="tagsBody">
	<table class="table  table-hover">
		<tr>
			<td>1<span class="glyphicon glyphicon-triangle-right"></span></td>
			<td>今天晚上请客预计15482元....</td>
			<td>
			<div class="btn-group">
			   <a href="#"><button type="button" class="btn btn-primary">编辑</button></a>
			  <a href="#"><button type="button" class="btn btn-danger">删除</button></a>
			</div>
			</td>
		</tr>
		<tr>
			<td>2<span class="glyphicon glyphicon-triangle-right"></span></td>
			<td>今天晚上交通预计5482元....</td>
			<td>
			<div class="btn-group">
			   <a href="#"><button type="button" class="btn btn-primary">编辑</button></a>
			  <a href="#"><button type="button" class="btn btn-danger">删除</button></a>
			</div>
			</td>
		</tr>
	</table>
</div>


<div style="height: 250px;"></div>


@stop
<style>
	div.addBody{
		margin-top: 50px;
	}
	div#change{
	 	width: 400px;
	 	margin: auto;
	}
	li#change{
		margin-left: 20px; 
	}
	div.tagsBody{
		width: 400px;
		margin: auto;
		margin-top: 20px;
	}
</style>