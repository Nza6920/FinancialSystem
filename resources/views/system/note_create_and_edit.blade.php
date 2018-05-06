@extends('layouts.default')
@if($note->id)
	@section('title','编辑便签')
@else
	@section('title','新建便签')
@endif

@section('content')
<div class="header">
	@if($note->id)
		<h1 style="text-align: center;">编辑便签</h1>
	@else
		<h1 style="text-align: center;">新建便签</h1>
	@endif
</div>
<div class="body">
	@include('session._errors')
	@if($note->id)
			<form method="POST" action="{{ route('note.update',$note->id) }}" class="form-horizontal">
	@else
			<form method="POST" action="{{ route('note.create') }}" class="form-horizontal">
	@endif
	{{ csrf_field() }}
	<div class="form-group">
		<textarea class="form-control" rows="5" name="flag" id="change" >{{ $note->flag }}</textarea>
	</div>
	<div class="button">
  	<input class="btn btn-success" type="submit" value="保存">
 	 <a href="{{ route('note.showNoteList') }}">
  	 <input class="btn btn-primary" type="button" value="返回">
  	 </a>
    </div>
	</form>
</div>

<div style="height: 100px;"></div>

@stop

<style>
	textarea#change{
		width: 600px;
		margin: auto;
	}
	div.button{
		width: 150px;
		margin: auto;
	}
</style>
