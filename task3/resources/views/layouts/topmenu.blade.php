<div class="navbar navbar-default" id="navbar-second">
    <ul class="nav navbar-nav no-border visible-xs-block">
        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
    </ul>
    <div class="navbar-collapse collapse" id="navbar-second-toggle">
        <ul class="nav navbar-nav navbar-nav-material">
            <li><a href="{{URL::route("user.index")}}"><i class="icon-user position-left"></i> User</a></li>
            <li><a href="{{URL::route("country.index")}}"><i class="icon-flag3 position-left"></i> Country</a></li>
        </ul>
    </div>
</div>