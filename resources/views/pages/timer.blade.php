@extends('layouts.app')


@section('content')

<div class="rulepage">

<?php $i=1 ?>
@foreach($themas as $thema)
@if($i==1)
<h1>今日のテーマ：「{{$thema->thema}}」 </h1>
@endif
<?php $i++; ?>
@endforeach
<br>

<h1 class="timer">
  残り
  <div class="counter">
    <span class="decor top"></span>
    <span class="decor bottom"></span>
    <span class="from top"><span></span><span class="shadow"></span></span>
    <span class="from bottom"><span></span><span class="shadow"></span></span>
    <span class="to top"><span></span><span class="shadow"></span></span>
    <span class="to bottom"><span></span><span class="shadow"></span></span>
  </div>
  　秒です。
</h1>

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       

{!! Form::open(['route'=>['thema.feedback',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('NEXT',["class"=>"btn btn-default"]) !!}
{!! Form::close() !!}


</div>


@endsection