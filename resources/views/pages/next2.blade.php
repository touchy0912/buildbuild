@extends('layouts.page')


@section('content')
<div class="nextpagebtn">
<?php $i=1 ?>
@foreach($users as $user)

@if($i==3)
<h2>次は<span class='username'>{{$user}}</span>さんです</h2>
<h3>この画面のまま、次の人に渡してください</h3>

@endif

<?php $i++; ?>
@endforeach

<?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       
       

{!! Form::open(['route'=>['role.user3',$users]]) !!}
{!! Form::hidden('roles',$roles) !!}
<button class="cssbtn2" type="submit">
次のユーザーへ
</button>
{!! Form::close() !!}
</div>

@endsection