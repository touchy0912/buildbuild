@extends('layouts.app')

@section('content')

<div class="rulepage">

<?php $i=1 ?>
@foreach($users as $user)

@if($i==6)
<h2>{{$user}} さん</h2>

@endif

<?php $i++; ?>
@endforeach


<?php $s=1 ?>

@foreach($roles as $role)

@if($s==6)
<div class="panel-body">
    <img class='media-object img-rounded img-responsive center-block' src= "{{ $role["fig_name"] }}" alt="">
</div>

<h2>あなたの役職は【{{$role['role']}}】です</h2>

<h3>{{$role['rule1']}}</h3>
<h2>【MISSION】</h2>
<h3>{{$role['rule2']}} </h3>
<h3>{{$role['rule3']}}</h3>
@endif

<?php $s++; ?>
@endforeach


       

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
{!! Form::open(['route'=>['thema.random',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('GAME START',["class"=>"btn btn-default"]) !!}
{!! Form::close() !!}

</div>

@endsection