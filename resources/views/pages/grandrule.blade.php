@extends('layouts.app')

@section('content')
        <div class="">
            <p>これからみなさんには課題に取り組んでいただきます。<br>
            その上で以下のルールを守ってください。</p>
        </div>
        <div>
            <ul>
                <li>ルール１<br>
                最終的にチームで１つの結論を出してもらいます。</li>
                <li>ルール２<br>
                携帯、身の回りの物はしまってください。</li>
                <li>ルール３<br>
                みなさんはチームです。相手へのリスペクトを持ち、ネガティブな発言は避けてください。</li>
            </ul>
        </div>
        <div>
            <?php  $users=urlencode(serialize($users)); 
            //var_dump($users);
            ?>
            {!! link_to_route("role.user1", "次へ", ['users'=>$users], ["class"=>"btn btn-default"]) !!}
        </div>
@endsection