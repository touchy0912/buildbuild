@extends('layouts.app')


@section('content')

<div class="rulepage">

<h1>ーフィードバックタイムー</h1>
<br>
<h2>チーム全体で、右隣の人へ順番に、<br>ポジティブなフィードバックを1人ずつしてください。</h2>





 <table class="table table-bordered">
     <caption align='center'>役職公開！</caption>

            <tbody>
                <tr>
                    <td>名前</td>
                @foreach ($users as $user)
                        <td>{{ $user}}</td>
                @endforeach
                    </tr>
               <tr>
                    <td>役職</td>
                @foreach ($roles as $role)
                        <td><h4>{{$role->role}}</h4></td>
                @endforeach
                </tr>
                
            </tbody>
        </table>



<h2>右隣の人へ、順番にポジティブなフィードバックを1人1分以内でしてください</h2>

{!! link_to_route("thema.gameend","トップページへ", '', ["class"=>"btn btn-default"]) !!}


</div>
@endsection