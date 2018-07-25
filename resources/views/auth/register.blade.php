@extends('layouts.page')

@section('content')
<div class='text-center'>
    <h1>Sign up</h1>
</div>

<div class='row'>
    <div class='col-xs-6 col-xs-offset-3'>
        
        {!! Form::open(['route'=>'signup.post']) !!}
        
        <div class='form-group'>
            {!! Form::label('team_name','Team Name') !!}
            {!! Form::text('team_name',old('name'),['class'=>'form-control']) !!}
        </div>

        <h3 class='register'>プレイするメンバーの名前を記入してください。</h3>

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
        
        <h3 class='register'>パスワードを設定してください。</h3>

        
        <div class='form-group'>
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('password_confirmation','Confirmation') !!}
            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
        </div>
    
          <button class="cssbtn2" type="submit">
              Signup
        </button>
    
            {!! Form::close() !!}
    </div>
</div>

@endsection