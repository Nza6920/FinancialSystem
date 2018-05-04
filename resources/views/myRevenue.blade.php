@extends('layouts.default')
@section('title','我的收入')
@section('content')
<div class="header">
	<h1 style="text-align: center;">我的收入</h1>
</div>
<div class="recordBody">
<table class="table  table-hover">
	<tr class="info">
		<td><strong>#</strong></td>
		<td><strong>类别</strong></td>
		<td><strong>金额</strong></td>
		<td><strong>时间</strong></td>
		<td><span class="glyphicon glyphicon-search"></span></td>
	</tr>	
	<tr>	
		<td><strong>1</strong></td>
		<td>餐费</td>
		<td>15元</td>
		<td>2017-5-6</td>
		<td>
			<div class="btn-group">
			   <a href="#"><button type="button" class="btn btn-primary">编辑</button></a>
			  <a href="#"><button type="button" class="btn btn-danger">删除</button></a>
			</div>
		</td>
	</tr>
	
	<tr>
		<td><strong>2</strong></td>
		<td>车费</td>
		<td>18元</td>
		<td>2017-5-7</td>
		<td>
			<div class="btn-group">
			   <a href="#"><button type="button" class="btn btn-primary">详细</button></a>
			  <a href="#"><button type="button" class="btn btn-danger">删除</button></a>
			</div>
		</td>
	</tr>
</table>
</div>

<div style="height: 100px;"></div>

@stop
<style>
	div.header{
		margin-top: 50px;
	}
	div.recordBody{
		width: 700px;
		margin: auto;
	}
</style>