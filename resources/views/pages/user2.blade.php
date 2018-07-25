@extends('layouts.page')

@section('content')

<div class="rulepage">

<?php $i=1 ?>
@foreach($users as $user)

@if($i==2)
<h2><span class='usersan'>{{$user}}</span>さん</h2>

@endif

<?php $i++; ?>
@endforeach


<?php $s=1 ?>

@foreach($roles as $role)

@if($s==2)
<div class="panel-body">
    <img class='media-object img-rounded img-responsive center-block' src= "{{ $role["fig_name"] }}" alt="">
</div>
<h2>あなたの役職は<span class='mission'>【{{$role['role']}}】</span>です</h2>

<h3>{{$role['rule1']}}</h3>
<h2 class='mission'>【MISSION】</h2>
<h3 class='mission2'>{{$role['rule2']}} </h3>
<h3 class='mission2'>{{$role['rule3']}}</h3>
@endif

<?php $s++; ?>
@endforeach

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
{!! Form::open(['route'=>['role.next2',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
<button class="cssbtn2" type="submit">
次のユーザーへ
</button>
{!! Form::close() !!}

</div>

@endsection