@extends('layouts.page')


@section('content')

<div class="timerpage">
<div class='timerpage2'>
<?php $i=1 ?>
@foreach($themas as $thema)
@if($i==1)
<h1><span class='themefont'>テーマ<br>「{{$thema['thema']}}」 </span></h1>
@endif
<?php $i++; ?>
@endforeach
<br>

<h1 class="timer">
  <span class='timerfont'>残り時間は
  <div class="counter">
    <span class="decor top"></span>
    <span class="decor bottom"></span>
    <span class="from top"><span></span><span class="shadow"></span></span>
    <span class="from bottom"><span></span><span class="shadow"></span></span>
    <span class="to top"><span></span><span class="shadow"></span></span>
    <span class="to bottom"><span></span><span class="shadow"></span></span>
  </div>
  　です。</span>
</h1>

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
<br><br><br><br>
{!! Form::open(['route'=>'thema.rolesfeed','name'=>'java']) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::hidden('users',$users) !!}
<button class="cssbtn2" type="submit">
Next
</button>
{!! Form::close() !!}

</div>
</div>


@endsection