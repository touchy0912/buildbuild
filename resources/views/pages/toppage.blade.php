@extends('layouts.app')

@section('content')
    @if(Auth::check())
<div class='text-center'>

<h1>Build-build</h1>
<h3>ビルビル</h3>



</div>
<div class="row">
<div class='col-xs-6 col-xs-offset-3'>
    
    {!! Form::open(['route'=>'games.grandrule']) !!}
    
    <div class='form-group'>
    {!! Form::label('user1','一人目') !!}
    {!! Form::text('user1',old('user1'),['class'=>'form-control']) !!}
    </div>
    
        <div class='form-group'>
    {!! Form::label('user2','二人目') !!}
    {!! Form::text('user2',old('user2'),['class'=>'form-control']) !!}
    </div>
    
        <div class='form-group'>
    {!! Form::label('user3','三人目') !!}
    {!! Form::text('user3',old('user3'),['class'=>'form-control']) !!}
    </div>
    
        <div class='form-group'>
    {!! Form::label('user4','四人目') !!}
    {!! Form::text('user4',old('user4'),['class'=>'form-control']) !!}
    </div>
    
        <div class='form-group'>
    {!! Form::label('user5','五人目') !!}
    {!! Form::text('user5',old('user5'),['class'=>'form-control']) !!}
    </div>
    
        <div class='form-group'>
    {!! Form::label('user6','六人目') !!}
    {!! Form::text('user6',old('user6'),['class'=>'form-control']) !!}
    </div>
    
    {!! Form::submit('START',['class'=>'btn btn-primary btn-block']) !!}
    

    
    {!! Form::close() !!}
    
</div>
</div>
    @else
    <div class='center jumbotron'>
        <div class='text-center'>
            <h1>Welcome to the Microposts</h1>
            {!! link_to_route('signup.get','signup now!',null,['class'=>'btn btn-lg btn-primary']) !!}
        </div>
        
        
    </div>
@endif



@endsection