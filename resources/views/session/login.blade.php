@extends('layouts.default')
@section('title','登录')
@section('content')
	<h1 class="text-center">欢迎使用</h1>
	<div style="text-align: center; height: 50px;">
  	<button style="margin-top: 20px; padding: 10px 40px;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
     开始
	</button>
	</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">登录</h4>
      </div>
      <div class="modal-body">
          @include('session._errors')
          @include('session._message')
      	<form method="post" action="{{ route('login') }}">
          {{ csrf_field() }}
            <div class="input-group">
        		  <span class="input-group-addon" id="basic-addon1">密码:</span>
        		  <input type="password" class="form-control" name="password" id="password" aria-describedby="basic-addon1">
    		    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
              <button type="submit" name="submit" class="btn btn-primary">确认</button>
            </div>
      </form>

    </div>
  </div>
</div>
<div style="height: 230px;"></div>
@stop
