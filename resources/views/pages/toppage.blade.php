@extends('layouts.app')


@section('content')
<div class='text-center'>

<h3 class="title2">ビル　　　　　　ビル</h3>
<h1 class="title1">Build-Build</h1>




</div>
<div class="row">
<div class='col-xs-6 col-xs-offset-3'>
    
    {!! Form::open(['route'=>'games.grandrule']) !!}
    
    <div class='form-group'>
    {!! Form::label('user1','PLAYER 1') !!}
    {!! Form::text('user1',old('user1'), ['class'=>'form-control', 'id'=>'focusedInput']) !!}
    </div>
    
    <div class='form-group'>
    {!! Form::label('user2','PLAYER 2') !!}
    {!! Form::text('user2',old('user2'),['class'=>'form-control']) !!}
    </div>
    
    <div class='form-group'>
    {!! Form::label('user3','PLAYER 3') !!}
    {!! Form::text('user3',old('user3'),['class'=>'form-control']) !!}
    </div>
    
    <div class='form-group'>
    {!! Form::label('user4','PLAYER 4') !!}
    {!! Form::text('user4',old('user4'),['class'=>'form-control']) !!}
    </div>
    
        <div class='form-group'>
    {!! Form::label('user5','PLAYER 5') !!}
    {!! Form::text('user5',old('user5'),['class'=>'form-control']) !!}
    </div>
    
        <div class='form-group'>
    {!! Form::label('user6','PLAYER 6') !!}
    {!! Form::text('user6',old('user6'),['class'=>'form-control']) !!}
    </div>
    
    <div class='botton'>
    {!! Form::submit("LET'S GET START!",['class'=>'btn btn-block']) !!}
    </div>

    
    {!! Form::close() !!}
    
</div>
</div>
@endsection
