@extends('layouts.app')


@section('content')
<div class="nextpagebtn">
<?php $i=1 ?>
@foreach($users as $user)

@if($i==3)
<h2>次は{{$user}} さんです</h2>
<h3>この画面のまま、次の人に渡してください</h3>

@endif

<?php $i++; ?>
@endforeach

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
       

{!! Form::open(['route'=>['role.user3',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::submit('次のユーザーへ',["class"=>"btn btn-default"]) !!}
{!! Form::close() !!}
</div>

@endsection