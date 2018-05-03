<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @include('session._errors')
      <h1 align="center">
      @if($pay->id)
          编辑支出
      @else
          新增支出
      @endif
      </h1>
      @if($pay->id)
          <form method="POST" action="{{ route('pay.update',$pay->id) }}" >
      @else
          <form method="POST" action="{{ route('pay.create') }}">
      @endif
          {{ csrf_field() }}
          <div>
              金额:&nbsp;&nbsp;&nbsp;<input type="text" name="money" value="{{ old('money',$pay->money) }}"><br>
              时间:&nbsp;&nbsp;&nbsp;<input type="text" name="time" value="{{ old('time',$pay->time) }}"><br>
              类别&nbsp;: &nbsp;
              <select name="type">
                  <option value="餐费">餐费</option>
                  <option value="出行">出行</option>
                  <option value="学习">学习</option>
              </select><br>
              地点:&nbsp;&nbsp;&nbsp;<input type="text" name="address" value="{{ old('address' ,$pay->address) }}"><br>
              备注:&nbsp;&nbsp;&nbsp;<textarea name="mark" rows="5" cols="30" value="{{ old('mark',$pay->mark) }}"></textarea>
              <br>
              <button type="submit">保存</button>
              <input type="reset" value="取消" >
          </div>
      </form>
  </body>
</html>
