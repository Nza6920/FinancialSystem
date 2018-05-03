@include('session._message')
@foreach($pays as $pay)
  <a href="{{ route('pay.one',$pay->id) }}">{{ $pay->type }} {{ round($pay->money,2) }}元 {{ $pay->time }}</a><br>
@endforeach
