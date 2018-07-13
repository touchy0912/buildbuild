@extends('layouts.app')

@section('content')


<div class="rulepage">
        <div class="">
                        
                <?php $i=1 ?>
                @foreach($users as $user)

                @if($i==1)
                <h2>{{$user}} さんにこのデバイスを渡してください</h2><br><br><br>

                @endif

                <?php $i++; ?>
                @endforeach
                
                
            <p>★今この画面を見ている人は、以下の文章を読み上げて★<br>
            ★チームのメンバーに内容を共有してください。★<br><br><br>
            

            

            <p>これからみなさんには課題に取り組んでいただきます。<br>
            その上で以下のルールを守ってください。</p>
        <div>
            <ul>
                <li>ルール１<br>
                最終的にチームで１つの結論を出してもらいます。</li>
                <li>ルール２<br>
                携帯、PC等はしまい、<span class="grandrule">傾聴</span>の姿勢を大切にしましょう！</li>
                <li>ルール３<br>
                相手への<span class="grandrule">リスペクト</span>を持ち、メンバーの意見に否定的にならないように意識しましょう！</li>
            </ul>
        </div>
        <div>
            
             <?php  $users=urlencode(serialize($users)); 
            //var_dump($users);
            ?>
            
            {!! link_to_route("role.user1", "次へ", ['users'=>$users], ["class"=>"btn btn-default"]) !!}
        </div>
    </div>
@endsection