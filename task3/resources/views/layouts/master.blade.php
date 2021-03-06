<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/icons.ico')}}"/>
        <title>@yield("title")</title>
        @include('layouts.css')
    </head>
    <body>
        <div class="navbar navbar-inverse bg-indigo">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::route("user.index")}}"><strong>INTERNETONE AG</strong></a>

                <ul class="nav navbar-nav pull-right visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                </ul>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('public/assets/images/placeholder.jpg')}}" alt="">
                            <span>{{Auth::user()->fname}} {{Auth::user()->lname}}</span>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{URL::route('auth.logout')}}"><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Main navbar -->
        
        <!-- /main navbar -->
        <!-- Second navbar -->
        @include('layouts.topmenu')
        <!-- /second navbar -->
        <!-- Page header -->
        @include('layouts.breadcum')
        <!-- /page header -->
        <!-- Page container -->
        <div class="page-container">
            @include('layouts.message')
            <!-- Page content -->
            @include('layouts.content')    
        </div>
        <!-- Footer -->
        <div class="footer text-muted">
                &copy; {{date("Y")}}. <a href="http://internetone.de" target="_blank">InternetOne </a>
        </div>
        <!-- /footer -->
        @include('layouts.script')
        
        @yield('js')
        @stack('scripts-footer')
        @stack('scripts')
    </body>
</html>