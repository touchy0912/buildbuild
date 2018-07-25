@extends('layouts.page')


@section('content')

<div class="rulepage">

<?php $i=1 ?>
@foreach($themas as $thema)
@if($i==1)
<h1>テーマ<br>「{{$thema['thema']}}」 </h1>
@endif
<?php $i++; ?>
@endforeach
<br>

<h1 class="timer">
  残り時間は
  <div class="counter">
    <span class="decor top"></span>
    <span class="decor bottom"></span>
    <span class="from top"><span></span><span class="shadow"></span></span>
    <span class="from bottom"><span></span><span class="shadow"></span></span>
    <span class="to top"><span></span><span class="shadow"></span></span>
    <span class="to bottom"><span></span><span class="shadow"></span></span>
  </div>
  　です。
</h1>

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
<br><br>
{!! Form::open(['route'=>'thema.feedback','name'=>'java']) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::hidden('users',$users) !!}
<button class="cssbtn2" type="submit">
Next
</button>
{!! Form::close() !!}


</div>


@endsection