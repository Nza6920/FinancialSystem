@extends('layouts.default')
@section('title','我的支出')
@section('content')
<div class="header">
	<h1 style="text-align: center;">我的支出</h1>
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
	@foreach($pays as $pay)
			<tr>
					<td><strong>{{ $pay->id }}</strong></td>
					<td>{{ $pay->type }}</td>
					<td>{{ round($pay->money,2) }}元</td>
					<td>{{ $pay->time }}</td>

				<td>
					<div class="btn-group">
						 <form action="{{ route('pay.destory',$pay->id) }}" method="POST">
		 		        {{ csrf_field() }}
								<a href="{{ route('pay.edit',$pay->id) }}"><button type="button" class="btn btn-primary">编辑</button></a>
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
