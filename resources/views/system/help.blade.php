@extends('layouts.default')
@section('title','帮助')
@section('content')
<div class="header">
	<h2 style="text-align: center;">《个人理财通》使用帮助</h2>
</div>

<div class="helpbody">
	<ul class="list-group">
		<li class="list-group-item">修改密码：选择&nbsp;<span class="label label-success">系统设置</span>&nbsp;模块可以修改登录密码，项目运行时，默认没有密码。
		</li>
		<li class="list-group-item">支出管理：选择&nbsp;<span class="label label-success">新增支出</span>&nbsp;模块可以添加支出信息；选择“我的支出”模块可以查看、修改和删除支出信息。
		</li>
		<li class="list-group-item">收入管理：选择&nbsp;<span class="label label-success">新增收入</span>&nbsp;模块可以添加收入信息；选择“我的收入”模块可以查看、修改和删除收入信息。
		</li>
		<li class="list-group-item">便签管理：选择&nbsp;<span class="label label-success">收支便签</span>&nbsp;模块可以添加便签信息；查看&nbsp;<span class="label label-success">数据管理</span>&nbsp;模块中的&nbsp;<span class="label label-success">便签信息</span>&nbsp;按钮可以查看、修改和删除便签信息。
		</li>
		<li class="list-group-item">退出系统：选择“退出”模块可以退出《个人理财通》项目</li>
	</ul>
</div>

@stop
<style>
	div.header{
		margin-top: 50px;
	}
	div.helpbody{
		width: 500px;
		margin: auto;
	}
</style>
