@extends('layouts.app')


@section('content')

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
       
<div class="nextpagebtn">
{!! Form::open(['route'=>['role.user3',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('次のユーザーへ',["class"=>"btn btn-default"]) !!}
{!! Form::close() !!}
</div>

@endsection