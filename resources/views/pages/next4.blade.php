@extends('layouts.app')


@section('content')
<div class="nextpagebtn">
<?php $i=1 ?>
@foreach($users as $user)

@if($i==5)
<h2>次は{{$user}} さんです</h2>

@endif

<?php $i++; ?>
@endforeach

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       

{!! Form::open(['route'=>['role.user5',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('次のユーザーへ',["class"=>"btn btn-default"]) !!}
{!! Form::close() !!}
</div>

@endsection