<header>
    
    <nav class='navbar navbar-static-top'>
        <div class='container'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand title3' href='/'>BuildBuild</a>
            </div>
                
                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                    <ul class='nav navbar-nav navbar-right title3'>
                        @if (Auth::check())
                        <li class='dropdown'>
                            <a href='#'  id='navcolor' class='dropdown-toggle nav-item hover' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' >{{Auth::user()->team_name}}<span class='caret'></span></a>  
                            <ul class='dropdown-menu'>
                            <li>{!! link_to_route('roles.list', 'Posts', null, ['class' => 'dropdown-item', 'style'=>"font-size:20px;"]) !!}</li>
                            <li role='separater' class='devider'></li>
                            <li>{!! link_to_route('logout.get', 'Logout',null,['style'=>"font-size:20px;"]) !!}</li>
                            </ul>
                        </li>
                        @else
                            <li>{!! link_to_route('signup.get','Signup', null, ['class' => 'hover']) !!}</li>
                            <li>{!!link_to_route('login','Login', null, ['class' => 'hover']) !!}</li>
                        @endif
                    </ul>
                </div>
        </div>
    </nav>
    
    
</header>