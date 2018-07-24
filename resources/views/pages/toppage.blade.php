


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
    <div class='title-image'>
    <div class='title'>
    <h2 class="title2">ビル　　　ビル</h2>
    <h1 class="title1">Build Build</h1>
    </div>
    </div>
    
    
    
    <!--ここから説明-->
    <div class='whatbb'>
    
            <p class="description">
              このゲームは、チームビルディングの課題を解決するために開発されました。<br>
              アイスブレイクやチームでの作業前にゲーム感覚で楽しみながら、<br>
              以下の3点をクリアし、「言える化」= 意見を言いやすい環境の構築を目指しましょう！
            </p><br><br>
            
            
    </div>
<div class="threekeystitle">
    <font size="50">3 KEYS</font>
</div>
    <div class='threekeys'>
        <img src="/image/opportunity.jpg" width="550" height="350" alt="">
            <div class="mask">
		        <div class="caption">
		            <h1 class="keys">発言機会の均等化</h1>
		            <br><br>
		            偏りなく、皆が発言の機会を持つ！
	            </div>
    	    </div>
    </div>
	<div class='threekeys'>
	    <img src="/image/ears.jpg" width="550" height="350" alt="">
            <div class="mask">
		        <div class="caption">
		            <h1>傾聴力</h1>
		            <br><br>メンバーの話を聞く姿勢を大切に！
                </div>
	        </div>
    </div>

    <div class='threekeys'>
        <img src="/image/respect.jpg" width="550" height="350" alt="">
            <div class="mask">
		        <div class="caption">
		            <h1>リスペクト</h1>
		            <br><br>
		            互いの意見を尊重しあう！</div>
	            </div>
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