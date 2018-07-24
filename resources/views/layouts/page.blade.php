    @extends('layouts.app')
    
    @section('content2')
    <div class='wrapper2'>    
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