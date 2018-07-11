@extends('layouts.app')

@section('content')

<?php $i=1 ?>
@foreach($users as $user)

@if($i==2)
<h2>{{$user}} さん</h2>
@endif

<?php $i++; ?>
@endforeach


<?php $s=1 ?>

@foreach($roles as $role)

@if($s==2)

<h2>あなたの役職は{{$role->role}}です</h2>
<h2>＜ルール＞</h2>
<h3>{{$role->rule1}}</h3>
<h3>{{$role->rule2}} </h3>
@endif

<?php $s++; ?>
@endforeach

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
{!! Form::open(['route'=>['role.user3',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('次のユーザーへ',["class"=>"btn btn-default"]) !!}
{!! Form::close() !!}

@endsection