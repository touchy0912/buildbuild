@extends('layouts.app')


@section('content')

<h1>スタート</h1>

<?php $i=1 ?>
@foreach($themas as $thema)
@if($i==1)
<h2>今日のテーマ：「{{$thema->thema}}」 </h2>
@endif
<?php $i++; ?>
@endforeach

@endsection