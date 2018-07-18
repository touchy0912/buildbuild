@extends('layouts.app')


@section('content')

<div class="rulepage">

<h1>スタート!!</h1>
<br>
<p>今このデバイスを持っている人はテーマを発表し、<br>「よーい、スタート」の合図でゲームを始めてください。</p>
<br>

<?php $i=1 ?>
@foreach($themas as $thema)
@if($i==1)
<h1>今日のテーマ：「{{$thema->thema}}」 </h1>
@endif
<?php $i++; ?>
@endforeach

<br>

<h1>制限時間は<span class="grandrule">５分間</span>です！</h1>
<p>※<span class="grandrule">5分経過後</span>、NEXTボタンを押してください。</p>


{!! link_to_route("thema.feedback","NEXT",'',['class'=>'btn btn-default']) !!}

</div>


@endsection