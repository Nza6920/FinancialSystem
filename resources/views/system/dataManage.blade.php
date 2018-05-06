@extends('layouts.default')
@section('title','数据管理')
@section('content')
<div class="body">
	<h1 style="width: 300px; margin-left: auto; margin-right: auto;">数据管理</h1>
</div>

<div id="change" style="width: 430px; margin-left: auto; margin-right: auto;">
<ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active" id="change"><a href="{{ route('chart.showIncome') }}">收入汇总 <span class="glyphicon glyphicon-play"></span></a></li>
  <li role="presentation" class="active" id="change"><a href="{{ route('chart.showPay') }}">支出汇总<span class="glyphicon glyphicon-play"></span></a></li>
  <li role="presentation" class="active" id="change"><a href="{{ route('note.showNoteList') }}">便签信息 <span class="glyphicon glyphicon-play"></span></a></li>
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
