

        

@extends('layouts.top')

@section('content')
    @if(Auth::check())
    
<div class='wrapper3'>
<div class='text-center'>
    <h1 class="title3">Build-Build</h1>
</div>
<div class="row">

<div class="rulepage"> 

    
        <font class='gaiyou'>概要</font><br>
       <ul>

            <li>ゲーム開始後、全員に役割が振り分けられます。</li><br>
            <li>役割を当てるゲームではありませんが、<br>最後に役割が公開されるので、<br>ほかのプレイヤーには自分の役割はシェアしないでください。</li><br>
            <li>【役割一覧は{!! link_to_route('roles.list','こちら',null) !!}】</li><br>
            <li>お題をもとに、制限時間内にディスカッションをして頂きます。</li><br>
            <li>ゲーム後にフィードバックをして頂き、終了です。</li><br>

       </ul>
  


    <div class='topbutton'>
    {!! link_to_route('games.grandrule',"Let's get started",null,['class'=>'btn btn-lg btn-info']) !!}
    </div>
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
        </p>
    </div>
    
    <!--ここから3keys-->
<div class="threekeystitle">
    <font size="50">3 KEYS</font>
</div>
    <div class='threekeys'>

        <img src="/image/kintou2.jpg" class='top-image'  alt="">
            <div class="mask">
		        <div class="caption">
		            <br><br>
		            偏りなく、皆が発言の機会を持つ！
	            </div>
    	    </div>
    </div>
	<div class='threekeys'>
	    <img src="/image/keicho2.jpg" class='top-image'  alt="">
            <div class="mask">
		        <div class="caption">
		            <br><br>メンバーの話を聞く姿勢を大切に！
                </div>
	        </div>
    </div>

    <div class='threekeys'>
        <img src="/image/respect2.jpg" class='top-image'  alt="">
            <div class="mask">
		        <div class="caption">
		            <br><br>
		            互いの意見を尊重しあう！</div>
	            </div>
    </div>

<div>　</div>


    <div class='roles-top'>
        <div class="poststitle">
            <font size="50">Assigned Posts</font>
        </div>
        <div class="boxContainer">
            
            <div class="box1"><img src="/media/tereope.png" class='role-image'>
                <div class="mask">
		            <div class="caption"><h1>ナビゲーター</h1><br>
		            議長として、議論を進める
		            </div>
            	</div>
            </div>
            <div class="box2"><img src="/media/pomeranianicon.png" class='role-image'>
                <div class="mask">
		            <div class="caption"><h1>ポメラニアン</h1><br>
		            人の意見を積極的に褒める</div>
            	</div>
            </div>
            <div class="box3"><img src="/media/dig.png" class='role-image'>
                <div class="mask">
		            <div class="caption"><h1>フカホリさん</h1><br>
		            積極的に質問をし、<br>議論を深める
		            </div>
            	</div>
            </div>
            <div class="box4"><img src="/media/serch.png" class='role-image'>
                <div class="mask">
		            <div class="caption"><h1>副キャプテン</h1><br>
		            意見を言えていない人に<br>話をふる</div>
            	</div>
            </div>
            <div class="box5"><img src="/media/hane.png" class='role-image'>
                <div class="mask">
		            <div class="caption"><h1>リポーター</h1><br>
		            話の内容を整理し、<br>適宜伝える</div>
            	</div>
            </div>
            <div class="box6"><img src="/media/clock.png" class='role-image'>
                <div class="mask">
		            <div class="caption"><h1>タイムキーパー</h1><br>
		            議論の進捗を管理する</div>
            	</div>
            </div>
        </div>
        
        

    </div>
              
    <h1 class="button">Sign up now!</h1>
    
    <div class='login-signup'>
        <li>
        <div class="description2">
                    {!! link_to_route('signup.get','Signup',null,['class'=>'btn btn-lg btn-info']) !!}
                    <h3>未登録のチーム</h3>
    
        </li>
            
    <!--ログイン機能に関しては表示場所要検討        -->
        <li class="description3">
                    {!! link_to_route('login','Login',null,['class'=>'btn btn-lg btn-info']) !!}
                    <h3>登録済みのチーム</h3>
    
        </li>
        </ul>
        
    
    </div>
    

@endif
@endsection