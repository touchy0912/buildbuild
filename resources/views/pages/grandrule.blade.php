@extends('layouts.app')

@section('content')


<div class="rulepage">
        <div class="">
                        
                <?php $i=1 ?>
                @foreach($users as $user)

                @if($i==1)
                <h2>{{$user}} さんにこのデバイスを渡してください</h2><br><br>

                @endif

                <?php $i++; ?>
                @endforeach
                
                
            <p>以下の文章を読み上げて、<br>
            チームのメンバーに内容を共有してください。<br><br><br>
            

            

            <p>これからみなさんにディスカッションをして頂きます。<br>
            その上で、<span class="grandrule">以下のルールを必ず守ってください。</span></p><br><br>
        <div>
            <ul>
                
                <div style="border-style: solid ; border-width: 5px; border-color: #ff0000;">
                         <body><br>
                        <div align="center">①最終的にチームで<span class="grandrule">１つの結論</span>を出してください。</div>
                        <div align="center">②携帯・PC等はしまい、<span class="grandrule">聞く姿勢</span>を大切にしましょう！</div>
                        <div align="center">③相手への<span class="grandrule">リスペクト</span>を持ち、否定的な意見は避けましょう！</div><br>
                        </body>
                        </div>
                        <br>
                    <li>全員がルールを理解したら、<br>みんなで「ビルビル！」と言って士気を高めましょう。</li>
                
            </ul>
        </div>
        <div>
            
             <?php  $users=urlencode(serialize($users)); 
            //var_dump($users);
            exit;
            ?>
            
            {!! link_to_route("role.user1", "次へ", ['users'=>$users], ["class"=>"btn btn-default"]) !!}
        </div>
    </div>
@endsection