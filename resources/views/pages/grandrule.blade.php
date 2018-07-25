@extends('layouts.page')

@section('content')


<div class="rulepage">
        <div class="">
                        
                <?php $i=1 ?>
                @foreach($users as $user)

                @if($i==1)
                <br><br>

                    <div class='grpg'>{{$user}} さんにこのデバイスを渡してください</div><br><br>


                @endif

                <?php $i++; ?>
                @endforeach
                
                
            <p>以下の文章を読み上げてください。<br><br><br>
                
            
                <span class="grandrule">以下のルールを必ず守ってください。</span></p><br><br>
        <div>
            <!--<div style="width:80%;margin: 0 auto 50px auto; border-style: solid ; border-width: 5px; border-color: #ffcc33;text-align:center;">-->
            <!--    <div style="padding:60px 0">-->
            <!--        ①最終的にチームで<span class="grandrule">１つの結論</span>を出してください。<br>-->
            <!--        ②携帯・PC等はしまい、<span class="grandrule">聞く姿勢</span>を大切にしましょう！<br>-->
            <!--        ③相手への<span class="grandrule">リスペクト</span>を持ち、否定的な意見は避けましょう！-->
            <!--    </div>-->
            <!--</div>-->
            
            <div class="caution">
                <p>①最終的にチームで<span class="grandrule">１つの結論</span>を出してください</p>
            </div>
            
            <div class="caution">
                <p>②携帯・PC等はしまい、<span class="grandrule">聞く姿勢</span>を大切にしましょう！</p>
            </div>
            
            <div class="caution">
                <p>③相手への<span class="grandrule">リスペクト</span>を持ち、否定的な意見は避けましょう！</p>
            </div>
            
                <ul>
                    <!--<li><span class="grandrule">※これは役割を当てるゲームではありません※</span></li><br> <br>-->
                    <br><br><br><li>全員がルールを理解したら、<br>みんなで「ビルビル！」と言って士気を高めましょう。</li>
                </ul>
        </div>
        <div>
            
             <?php  $users=urlencode(serialize($users)); 
            ?>
            
            {!! link_to_route("role.user1", "次へ", ['users'=>$users], ["class"=>"btn btn-default btn-lg"]) !!}
        </div>
    </div>
@endsection