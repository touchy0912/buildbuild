


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

<div class="rulepage"> 

    
        <font size="8">概要</font><br>
       <ul>

            <li>ゲーム開始後、全員に役割が振り分けられます。</li><br>
            <li>役割を当てるゲームではありませんが、<br>最後に役割が公開されるので、<br>ほかのプレイヤーには自分の役割はシェアしないでください。</li><br>
            <li>【役割一覧は{!! link_to_route('roles.list','こちら',null) !!}】</li><br>
            <li>お題をもとに、制限時間内にディスカッションをして頂きます。</li><br>
            <li>ゲーム後にフィードバックをして頂き、終了です。</li><br>

       </ul>
  


    <div>
    {!! link_to_route('games.grandrule',"Let's get started",null,['class'=>'btn btn-lg btn-info']) !!}
    </div>
</div>
   
</div>
</div>
    @else
    <div class='center jumbotron'>
    <div>
    <h2 class="title2">ビル　　　ビル</h2>
    <h1 class="title1">Build Build</h1>
    </div><br><br>
            <p class="description">
              このゲームは、チームビルディングの課題を解決するために開発されました。<br>
              メンバー全員の「言える化」の実現を目的としています。<br>
              以下の3点の実現により、「言える化」= 意見を言いやすい環境ができると考えました。<br><br>
              <br>
              ☆傾聴力<br>
              ☆リスペクト<br>
              ☆発言機会の均等化<br>
              <br><br>
              アイスブレイクやチームでの作業前に、<br>
              ゲーム感覚で楽しみながら、この3点をクリアし、「言える化」を目指しましょう！
            </p><br><br><br><br><br><br>
            
            <div class="description2">
            <p>未登録のチームはこちら</p>
                 {!! link_to_route('signup.get','Signup',null,['class'=>'btn btn-lg btn-info']) !!}
            </div> <br><br><br>
            
            
            <div class="description3">
                <p>登録済みのチームはこちら</p>
                 {!! link_to_route('login','Login',null,['class'=>'btn btn-lg btn-info']) !!}
            </div>
    </div>

@endif
@endsection