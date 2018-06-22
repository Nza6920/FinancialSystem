@extends('layouts.default')
@section('title','我的收入')
@section('content')
<div class="header">
	<h1 style="text-align: center;">我的收入</h1>
</div>
@include('session._message')
<div class="recordBody">
<table class="table  table-hover">
	<tr class="info">
		<td><strong>#</strong></td>
		<td><strong>类别</strong></td>
		<td><strong>金额</strong></td>
		<td><strong>时间</strong></td>
		<td><span class="glyphicon glyphicon-search"></span></td>
	</tr>
@foreach($incomes as $income)
	<tr>
		<td><strong>{{ $i++ }}</strong></td>
		<td>{{ $income->type }}</td>
		<td>{{ round($income->money,2) }}元</td>
		<td>{{ $income->time }}</td>
		<td>
			<div class="btn-group">
				<form action="{{ route('income.destory', $income->id) }}" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					 {{ csrf_field() }}
					 <a href="{{ route('income.edit', $income->id) }}"><button type="button" class="btn btn-primary">编辑</button></a>
					 <button type="submit" class="btn btn-danger">删除</button>
			 </form>
			</div>
		</td>
	</tr>
@endforeach

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
