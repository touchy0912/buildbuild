

        

@extends('layouts.top')

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
    <div class='title'>
    <h2 class="title2">ビル　　　ビル</h2>
    <h1 class="title1">Build Build</h1>
    </div>
    
    
    
    <!--ここから説明-->
    <div class='whatbb'>
    
            <p class="description">
              このゲームは、チームビルディングの課題を解決するために開発されました。<br>
              アイスブレイクやチームでの作業前にゲーム感覚で楽しみながら、<br>
              以下の3点をクリアし、「言える化」= 意見を言いやすい環境の構築を目指しましょう！
            </p><br><br>
            
            
    </div>
    <div class='threekeys'>
             <p>
              ☆傾聴力<br>
              ☆リスペクト<br>
              ☆発言機会の均等化<br>
              </p><br><br>
    </div>  
    
    <div class='roles-top'>
        役職一覧
    </div>
              
    
    <div class='login-signup'>
    <div class="description2">
                {!! link_to_route('signup.get','Signup',null,['class'=>'btn btn-lg btn-info']) !!}
                <h3>未登録のチームはこちら</h3>

    </div>
            
    <!--ログイン機能に関しては表示場所要検討        -->
    <div class="description3">
                {!! link_to_route('login','Login',null,['class'=>'btn btn-lg btn-info']) !!}
                <h3>登録済みのチームはこちら</h3>

    </div>
    
    </div>
    

@endif
@endsection