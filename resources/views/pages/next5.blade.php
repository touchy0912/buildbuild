@extends('layouts.app')


@section('content')

<?php $i=1 ?>
@foreach($users as $user)

@if($i==6)
<h2>次は{{$user}} さんです</h2>

@endif

<?php $i++; ?>
@endforeach

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
<div class="nextpagebtn">
{!! Form::open(['route'=>['role.user6',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('次のユーザーへ',["class"=>"btn btn-default"]) !!}
{!! Form::close() !!}
</div>


@endsection