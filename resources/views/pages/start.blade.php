@extends('layouts.app')


@section('content')

<div class="rulepage">

<h1>スタート</h1>

<?php $i=1 ?>
@foreach($themas as $thema)
@if($i==1)
<h2>今日のテーマ：「{{$thema->thema}}」 </h2>
@endif
<?php $i++; ?>
@endforeach

<<<<<<< HEAD
{!! link_to_route("thema.feedback","ゲーム終了",'',['class'=>'btn btn-default']) !!}
=======
</div>
>>>>>>> designchange

@endsection