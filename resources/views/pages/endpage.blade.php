@extends('layouts.page')


@section('content')

<div class="rulepage">

<h1>お疲れ様でした！</h1>
<br>
<h2>今日も元気に頑張りましょう！</h2>

{!! link_to_route("games.index","FINISH", '', ["class"=>"btn btn-default btn-lg"]) !!}

</div>
@endsection