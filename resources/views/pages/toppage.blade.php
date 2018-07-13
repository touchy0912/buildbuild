@extends('layouts.app')

@section('content')
    @if(Auth::check())
<div class='text-center'>
    <h3 class="title2">ビル　　　　　　ビル</h3>
    <h1 class="title1">Build-Build</h1>
</div>
<div class="row">
<div class='col-xs-6 col-xs-offset-3'>
    
    {!! Form::open(['route'=>'games.grandrule']) !!}
    
    <div class='form-group'>
        <span class="glyphicon glyphicon-user"></span>
        {!! Form::text('user1',old('user1'), ['class'=>'form-control', 'placeholder'=>'PLAYER 1']) !!}
    </div>
    
    <div class='form-group'>
        <span class="glyphicon glyphicon-user"></span>
        {!! Form::text('user2',old('user2'),['class'=>'form-control', 'placeholder'=>'PLAYER 2']) !!}
    </div>
    
    <div class='form-group'>
        <span class="glyphicon glyphicon-user"></span>
        {!! Form::text('user3',old('user3'),['class'=>'form-control', 'placeholder'=>'PLAYER 3']) !!}
    </div>
    
    <div class='form-group'>
        <span class="glyphicon glyphicon-user"></span>
        {!! Form::text('user4',old('user4'),['class'=>'form-control', 'placeholder'=>'PLAYER 4']) !!}
    </div>
    
    <div class='form-group'>
        <span class="glyphicon glyphicon-user"></span>
        {!! Form::text('user5',old('user5'),['class'=>'form-control', 'placeholder'=>'PLAYER 5']) !!}
    </div>
    
    <div class='form-group'>
        <span class="glyphicon glyphicon-user"></span>
        {!! Form::text('user6',old('user6'),['class'=>'form-control', 'placeholder'=>'PLAYER 6']) !!}
    </div>
    
    <div class='botton'>
        {!! Form::submit("LET'S GET STARTED!",['class'=>'btn btn-block']) !!}
    </div>
    
    {!! Form::close() !!}
    
</div>
</div>
    @else
    <div class='center jumbotron'>
        <div class='text-center'>
            <h1>Build Build</h1>
            <h2>-ビルビル-</h2>
            {!! link_to_route('login','Login',null,['class'=>'btn btn-lg btn-info']) !!}
        </div>
        
        
    </div>
@endif



@endsection