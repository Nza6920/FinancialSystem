<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 align="center">重置密码页面</h1>
    @include('session._errors')
    <form class="form-horizontal" method="POST" action="{{ route('resetPsw') }}">
        {{ csrf_field() }}
          <div >
              <label for="password" >密码：</label>
              <input type="password" name="password" required>
          </div>

          <div >
              <button type="submit">
                  修改密码
              </button>
          </div>
    </form>
  </body>
</html>
