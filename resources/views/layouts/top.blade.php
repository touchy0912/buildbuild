    @extends('layouts.app')
    
    
    @if(Auth::check())
    
    
    @section('content2')
    
    <div class='wrapper4'>    
        @include('commons.navbar')
    
    <div class='container'>
        @include('commons.error_messages')
        @yield('content')
    </div>
    
            
     <footer>
        <small>&copy; 2018 Daichi+no+Megumi. </small>
    </footer>
    </div>
    
    

    @endsection
    
    @else
    
    @section('content2')
    
    <div class='wrapper'>    
        @include('commons.navbar')
    
    <div class='container'>
        @include('commons.error_messages')
        @yield('content')
    </div>
    
            
     <footer>
        <small>&copy; 2018 Daichi+no+Megumi. </small>
    </footer>
    </div>
    
    

    @endsection
    
    @endif