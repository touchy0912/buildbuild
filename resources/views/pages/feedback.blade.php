@extends('layouts.app')


@section('content')

<div class="rulepage">

<h1>ーフィードバックタイムー</h1>
<br>
<h2>チーム全体で、右隣の人へ順番に、<br>ポジティブなフィードバックを1人ずつしてください。</h2>

{!! link_to_route("thema.gameend","NEXT", '', ["class"=>"btn btn-default"]) !!}

</div>
@endsection