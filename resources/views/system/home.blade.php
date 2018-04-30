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
    <form method="POST" action="{{ route('logout') }}">
        {{ csrf_field() }}
          <button type="submit">退出</button>
    </form>
    </br>
    <a href="{{ route('resetPsw') }}">重置密码</a>
  </body>
</html>
