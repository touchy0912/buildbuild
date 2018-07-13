@extends('layouts.app')


@section('content')

<div class="nextpage">

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
<div class="nextpagebtn">
{!! Form::open(['route'=>['role.user2',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('次のユーザーへ',["class"=>"btn btn-default btn-lg"]) !!}
{!! Form::close() !!}
</div>

</div>
@endsection