@extends('layouts.default')
@if($income->id)
	@section('title','编辑收入')
@else
	@section('title','新增收入')
@endif
@section('content')
<div class="addBody" >
	@if($income->id)
		<h1 style="text-align: center;">编辑收入</h1>
	@else
		<h1 style="text-align: center;">新增收入</h1>
	@endif
	@include('session._errors')
	@include('session._message')

	@if($income->id)
			<form method="POST" action="{{ route('income.update',$income->id) }}" class="form-horizontal">
	@else
			<form method="POST" action="{{ route('income.create') }}" class="form-horizontal">
	@endif
		{{ csrf_field() }}
			<div class="form-group">
		    <label for="money" class="col-sm-2 control-label">金额：</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="money" name="money" placeholder="(元)" value="{{ old('money',round($income->money,2)) }}">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="time" class="col-sm-2 control-label">时间：</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="time" name="time" placeholder="xxxx-xx-xx" value="{{ old('time',$income->time) }}">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="type" class="col-sm-2 control-label">类别：</label>
		    <div class="col-sm-3">
					<select name="type" class="form-control">
						<option value="" {{ $income->id ? '' : 'selected' }}>请选择分类</option>
						<option value="工资" {{ strcmp($income->type,"工资") == 0 ? 'selected' : '' }}>工资</option>
						<option value="兼职" {{ strcmp($income->type,"兼职") == 0 ? 'selected' : '' }}>兼职</option>
						<option value="分红" {{ strcmp($income->type,"分红") == 0 ? 'selected' : '' }}>分红</option>
						<option value="奖金" {{ strcmp($income->type,"奖金") == 0 ? 'selected' : '' }}>奖金</option>
						<option value="其他" {{ strcmp($income->type,"其他") == 0 ? 'selected' : '' }}>其他</option>
					</select>
			</div>
		  </div>
		  <div class="form-group">
		    <label for="address" class="col-sm-2 control-label">地点：</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="address" name="address" placeholder="具体地点" value="{{ old('address',$income->handler) }}">
		    </div>
		  </div>
		  <div class="form-group">

		    <label for="mark" class="col-sm-2 control-label">备注：</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="mark" name="mark" placeholder="备注信息" value="{{ old('mark',$income->mark) }}">
		    </div>
		  </div>
		  <input class="btn btn-success" type="submit" value="保存" style="margin-left: 400px;">
		  <a href="{{ route('home.show') }}">
		  	<input class="btn btn-primary" type="button" value="取消">
		  </a>
	</form>
</div>
@stop

<style>
	div.addBody{
		margin-top: 50px;
	}
	form{
		margin-left:450px;
	}
</style>
