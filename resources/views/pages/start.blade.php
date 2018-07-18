@extends('layouts.app')


@section('content')

<div class="rulepage">

<h1>スタート!!</h1>

<?php $i=1 ?>
@foreach($themas as $thema)
@if($i==1)
<h2>今日のテーマ：「{{$thema->thema}}」 </h2>
@endif
<?php $i++; ?>
@endforeach

<br>

<h1>制限時間は<span class="grandrule">５分間</span>です！</h1>



<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       

{!! Form::open(['route'=>['thema.feedback',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('NEXT',["class"=>"btn btn-default"]) !!}
{!! Form::close() !!}

</div>


@endsection