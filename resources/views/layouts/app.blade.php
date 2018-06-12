<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta charset="utf-8">
        <title>Tasklist</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
       
        <header>
            <!-- ナビ --!>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" deta-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>   
                       <span class="icon-bar"></span> 
                       <span class="icon-bar"></span>
                       </button>
                       <a class="navbar-brand" href="/">Tasklist</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                              @if (Auth::check())
                              <li> {!! link_to_route('tasks.index', 'Users') !!}</li>
                              <li class='dropdown'>
                              <a href="#">my pforile</a> </li>
                              <li role='separator' class="divider"></li>
                              <li> {!! link_to_route("tasks.create",'creating a new message') !!} </li>
                            <li>{!! link_to_route('logout.get', 'logout') !!} </li>
                             </ul>
                             @else
                             <li>{!! link_to_route('signup.get', 'Signup') !!} </li>
                            <li>{!! link_to_route('login', 'Login') !!}</li>
                             @endif
                             </ul>
                        </div>
                        </div>
            </nav>
        </header>
         @include('commons.error_tasks')
        @yield('content')
        
    </body>
</html>