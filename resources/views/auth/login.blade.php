@extends('layouts.app')

@section('content')

<div class='text-center'>
    <h1>Log in</h1>
</div>

<div class="row">
<div class='col-mid-6 col-mid-offset-3'>
    {!! Form::open(['route'=>'login.post']) !!}
    <div class='form-group'>
        {!! Form::label('name','TeamID') !!}
        {!! Form::text('name',old('name'),['class'=>'form-control'])  !!}
    </div>
        <div class='form-group'>
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control'])  !!}
    </div>
    
    {!! Form::submit('Log in',['class'=>'btn btn-primary btn-block']) !!}
    
    {!!  Form::close() !!}
    
    <p>New User?{!! link_to_route('signup.get','Sign up Now!') !!}</p>
    
</div>
</div>


@endsection