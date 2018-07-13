@extends('layouts.app')


@section('content')

<<<<<<< HEAD
<?php $i=1 ?>
@foreach($users as $user)

@if($i==2)
<h2>次は{{$user}} さんです</h2>

@endif

<?php $i++; ?>
@endforeach

=======
<div class="nextpage">
>>>>>>> designchange

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