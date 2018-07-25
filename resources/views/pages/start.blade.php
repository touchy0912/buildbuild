@extends('layouts.page')


@section('content')

<div class="rulepage">

<h1>スタート!!</h1>
<br>
<p>今このデバイスを持っている人はテーマを発表し、<br>「よーい、スタート」の合図でゲームを始めてください。</p>
<br>

<?php $i=1 ?>
@foreach($themas as $thema)
@if($i==1)
<h1><span class='themefont'>テーマ<br>「{{$thema["thema"]}}」 </span></h1>
@endif
<?php $i++; ?>
@endforeach

<br>

<h1>制限時間は<span class="grandrule">５分間</span>です！</h1>
<p>TIMER STARTボタンを押してください！</p>



<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); 
       $themas=urlencode(serialize($themas));
       ?>
       

{!! Form::open(['route'=>['thema.timer',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::hidden('themas',$themas) !!}
<button class="cssbtn2" type="submit">
Timer Start
</button>
{!! Form::close() !!}


</div>


@endsection