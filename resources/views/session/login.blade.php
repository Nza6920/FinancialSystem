<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @include('session._errors')
    @include('session._message')
      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div>
              <label for="password">密码：</label>
              <input type="password" name="password" value="{{ old('password') }}">
          </div>

            <button type="submit">登录</button>
      </form>
  </body>
</html>
