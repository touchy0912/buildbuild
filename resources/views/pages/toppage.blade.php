


<!--「言える化」は赤文字などで強調してほしい！-->
<!--全体的に、見やすく大きなフォントでお願いします！-->
<!--全体的に中央ぞろえでお願いします！！-->
        
        

@extends('layouts.app')

@section('content')
    @if(Auth::check())
<div class='text-center'>
    <h3 class="title2">ビル　　　　　　ビル</h3>
    <h1 class="title1">Build-Build</h1>
</div>
<div class="row">
<div class='col-xs-6 col-xs-offset-3'>
    
    <div>
        <h1>ゲームの概要</h1>
       <ul>
           <li>ゲームが開始されると、プレイヤー全員に役割がランダムに振り分けられます</li>
           <li>表示されたお題をもとに、制限時間内にディスカッションをしていただきます</li>
           <li>タイムアウト後に、チームで出した結論を担当の役割の人にシェアしていただきます</li>
           <li>最後にフィードバックをしていただいてゲーム終了です</li>
       </ul>
      
       
    </div>
   
    <div>
    {!! link_to_route('games.grandrule',"Let's get started",null,['class'=>'btn btn-lg btn-info']) !!}
    </div>
   
</div>
</div>
    @else
    <div class='center jumbotron'>
    <div>
    <h2 class="title2">ビル　　　ビル</h2>
    <h1 class="title1">Build Build</h1>
    </div>
            <p>
              このゲームは皆さんのチームビルディングの課題を解決するために開発されたアプリです。<br>
              このゲームを通して、メンバー全員の「言える化」の実現を目的としています。<br>
              私たちは、以下の三点が実現できれば、「言える化」、つまり意見を言いやすい環境ができるのではないかと思いました。<br>
              <br>
              ・傾聴力：メンバーの話を聞く姿勢を見せること<br>
              ・リスペクト：リスペクトの気持ちを持ち、互いの意見を尊重すること<br>
              ・発言機会の均等：声が大きい人だけでなく、皆が発言の機会を持つこと<br>
              <br>
              アイスブレイクやチームで作業をする前に、<br>
              ゲーム感覚で楽しみながら、これら三点をクリアして、皆さんの「言える化」を目指しましょう！
            </p>
            
            <div>
                <p>未登録の方はこちら</p>
                 {!! link_to_route('signup.get','Signup',null,['class'=>'btn btn-lg btn-info']) !!}
            </div>
            
            <div>
                <p>登録済みの方はこちら</p>
                 {!! link_to_route('login','Login',null,['class'=>'btn btn-lg btn-info']) !!}
            </div>
　　</div>

@endif
@endsection