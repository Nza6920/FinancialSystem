@extends('layouts.default')
@section('title','便签信息')
@section('content')
<div class="body">
	<h1 style="text-align: center;">便签信息</h1>
</div>
@include('session._message')
<div id="change">
<ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active" id="change"><a href="{{ route('chart.showIncome') }}">收入汇总 <span class="glyphicon glyphicon-play"></span></a></li>
  <li role="presentation" class="active" id="change"><a href="{{ route('chart.showPay') }}">支出汇总<span class="glyphicon glyphicon-play"></span></a></li>
  <li role="presentation" class="active" id="change"><a href="{{ route('note.show') }}">新建便签 <span class="glyphicon glyphicon-play"></span></a></li>
</ul>
</div>
<div class="tagsBody">
	<table class="table  table-hover">
		@foreach($notes as $note)
			<tr>
				<td>{{ $note->id }}<span class="glyphicon glyphicon-triangle-right"></span></td>
				<td>{{ $note->flag }}</td>
				<td>
				<div class="btn-group">
					<form action="{{ route('note.destory', $note->id) }}" method="POST">
						 {{ csrf_field() }}
						 <a href="{{ route('note.edit', $note->id) }}"><button type="button" class="btn btn-primary">编辑</button></a>
						 <button type="submit" class="btn btn-danger">删除</button>
				 </form>
				</div>
				</td>
			</tr>
		@endforeach
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
