@extends('layouts.page')


@section('content')

<div class="rulepage">

<h1>フィードバックタイム</h1>
<br>【役職公開】<br>
<h2>チーム全体で、今の席の右隣の人へ順番に、<br>ポジティブなフィードバックを1人ずつしてください。</h2>





 <table class="table table-bordered">
     <caption align='center'></caption>

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
                        <td><h4>{{$role['role']}}</h4></td>
                @endforeach
                </tr>
                
            </tbody>
        </table>


            <a href="{{route('thema.gameend')}}" class="btn btn-lg">
            <button class='cssbtn2'>　Next　</button>    
            </a>



</div>
@endsection