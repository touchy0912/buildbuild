@extends('layouts.app')


@section('content')

<div class="rulepage">

<h1>お疲れさまでした！ゲーム終了です。</h1>

<h2>右隣の人へ、順番にポジティブなフィードバックを1人1分以内でしてください</h2>

{!! link_to_route("games.index","トップページへ", '', ["class"=>"btn btn-default"]) !!}

</div>
@endsection