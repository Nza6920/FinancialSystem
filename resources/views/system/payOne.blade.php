<p align="center">
  类型: {{ $pay->type }} <br>
  金额: {{ round($pay->money,2) }}元 <br>
  地点: {{ $pay->address }} <br>
  时间: {{ $pay->time }} <br>
  备注: {{ $pay->mark }} <br>
</p>
<div>
    <a href="{{ route('pay.edit',$pay->id) }}">
      <button type="button" name="edit">编辑</button>
    </a>

    <form action="{{ route('pay.destory',$pay->id) }}" method="POST">
        {{ csrf_field() }}
        <button type="submit" name="delete">删除</button>
    </form>
</div>
