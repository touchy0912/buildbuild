@extends('layouts.page')


@section('content')
    <h1 class=yakusyoku>Posts</h1>
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
            <div class="caption"><h3>影のリーダー</h3><br>
            議論を仕切っている人を、陰で全力でサポートする</div>
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
<div>
    <span class='mouiya'>
            <a href="{{route('games.index', null)}}" class="btn btn-lg">
            <button class='cssbtn2'>　TopPageへ　</button>    
            </a>
    </span>
</div>
@endsection