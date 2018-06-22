@extends('layouts.default')
@section('title','菜单')
@section('content')
@include('session._message')
<div class="allSelected">
<div class="selectedBody">
	<a href="{{ route('pay.show') }}">
		<img class="menu  img-rounded" src="images/addCost.png" width="200px" height="200px" alt="新增支出">
	</a>
	<div class="selectInfo">新增支出</div>
</div>
<div class="selectedBody">
	<a href="{{ route('income.show') }}">
		<img class="menu img-rounded" src="images/addRevenue.png" width="200px" height="200px" alt="新增收入">
	</a>
	<div class="selectInfo">新增收入</div>
</div>
<div class="selectedBody">
	<a href="{{ route('pay.list') }}">
		<img class="menu img-rounded" src="images/myCost.png" width="200px" height="200px" alt="我的支出">
	</a>
	<div class="selectInfo">我的支出</div>
</div>
<div class="selectedBody">
	<a href="{{ route('income.list') }}">
		<img class="menu img-rounded" src="images/myRevenue.png" width="200px" height="200px" alt="我的收入">
	</a>
	<div class="selectInfo">我的收入</div>
</div>
<div class="selectedBody">
	<a href="{{ route('static.data') }}">
		<img class="menu img-rounded" src="images/dataManage.png" width="200px" height="200px" alt="数据管理">
	</a>
	<div class="selectInfo">数据管理</div>
</div>
<div class="selectedBody">
	<a href="{{ route('resetPsw') }}">
		<img class="menu img-rounded" src="images/systemSelection.png" width="200px" height="200px" alt="系统设置">
	</a>
	<div class="selectInfo">系统设置</div>
</div>
<div class="selectedBody">
	<a href="{{ route('note.showNoteList') }}">
		<img class="menu img-rounded" src="images/tags.png" width="200px" height="200px" alt="收支便签">
	</a>
	<div class="selectInfo">收支便签</div>
</div>
<div class="selectedBody">
	<a href="{{ route('static.help') }}">
		<img class="menu img-rounded" src="images/help.jpg" width="200px" height="200px" alt="帮助">
	</a>
	<div class="selectInfo">帮助</div>
</div>
<div class="selectedBody">
	<form method="POST" action="{{ route('logout') }}">
			{{ csrf_field() }}
			<button type="submit" name="button">
				<img class="menu img-rounded" src="images/quit.jpg" width="200px" height="200px" alt="退出">
			</button>
	</form>
	<div class="selectInfo">退出</div>
</div>
</div>

@stop

<style>
.allSelected {
    max-width: 		800px;
    height: 		500px;
    margin: 		auto;
}
.selectedBody{
	display: 		inline-block;
	float: 			left;
	margin: 		10px;
	margin-right: 	20px;

}
.selectInfo{
	text-align: 	center;
}
img.menu{
	border: 		1px solid black;
}
</style>
