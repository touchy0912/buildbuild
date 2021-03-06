@extends('layouts.page')

@section('content')

<div class='text-center'>
    <h1>Log in</h1>
</div>

<div class="row">
<div class='col-xs-6 col-xs-offset-3'>
    {!! Form::open(['route'=>'login.post']) !!}
    <div class='form-group'>
        {!! Form::label('team_name','TeamID') !!}
        {!! Form::text('team_name',old('team_name'),['class'=>'form-control'])  !!}
    </div>
        <div class='form-group'>
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control'])  !!}
    </div>
    
    
    <button class="cssbtn2" type="submit">
Login
</button>
    
    {!!  Form::close() !!}
    
    <p>New User?{!! link_to_route('signup.get','Sign up Now!') !!}</p>
    
</div>
</div>


@endsection