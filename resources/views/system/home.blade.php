<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @include('session._message')
    <h1 align="center">这里是系统首页</h1>
    <p>你好: {{ $user->name }}</p>
    <p>
        <a href="{{ route('pay.show',$user->id) }}">新增支出</a><br>
        <a href="#">新增收入</a><br>
        <a href="{{ route('pay.list') }}">我的支出</a><br>
        <a href="#">我的收入</a><br>
        <a href="#">数据管理</a><br>
        <a href="#">系统设置</a><br>
        <a href="#">收支便签</a><br>
        <a href="#">帮助</a><br>
    </p>
    <form method="POST" action="{{ route('logout') }}">
        {{ csrf_field() }}
          <button type="submit">退出</button>
    </form>
    </br>
    <a href="{{ route('resetPsw') }}">重置密码</a>
  </body>
</html>
