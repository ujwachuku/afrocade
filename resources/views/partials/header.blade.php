<!-- logo, menu, search, avatar -->
<div class="container-fluid">
    <div class="row">
       <div class="navbar-container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 visible-xs">
                        <a href="#" class="btn-menu-toggle"><i class="cv cvicon-cv-menu"></i></a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-6">
                        <a class="navbar-brand" href="/">
                            <img src="/images/logo.png" alt="{{ config('app.name') }}" class="logo" />
                            <span>{{ config('app.name') }}</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-10 hidden-xs">
                        <ul class="list-inline menu">
                            <li class="{{ Route::currentRoutename() === 'home.index' ? 'color-active' : '' }}">
                                <a href="/">Home</a>
                            </li>
                            <li class="{{ Route::currentRoutename() === 'articles.index' || Route::currentRoutename() === 'articles.show' ? 'color-active' : '' }}"><a href="{{ route('articles.index') }}">Articles</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-xs-3">
                        <form action="{{ route('articles.index') }}" method="get">
                            <div class="topsearch">
                                <i class="cv cvicon-cv-cancel topsearch-close"></i>
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" name="q" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cv cvicon-cv-file"></i>&nbsp;&nbsp;&nbsp;</button>                                        
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-sm-4 hidden-xs">                        
                        <div class="selectuser pull-left">
                            <div class="btn-group pull-right dropdown">
                                @auth
                            <span class="status"></span>
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                      Log out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                @endauth
                                @guest
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Login/Sign up
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Sign up</a></li>
                                </ul>
                                @endguest
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /logo -->

<div class="mobile-menu">
    <div class="mobile-menu-head">
        <a href="#" class="mobile-menu-close"></a>
        <a class="navbar-brand" href="index.html">
            <img src="/images/logo.png" alt="{{ config('app.name') }}" class="logo" />
            <span>{{ config('app.name') }}</span>
        </a>
        <div class="mobile-menu-btn-color">
            <!-- <img src="/images/icon_bulb_light.png" alt=""> -->
        </div>
    </div>
    <div class="mobile-menu-content">
        <div class="mobile-menu-user">
            @auth
            <div class="mobile-menu-user-img">
                <img src="{{ '/storage/'.Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" width="50px" height="50px" />
            </div>
            <p>{{ Auth::user()->name }} </p>
            <span class="caret"></span>
            <!-- Put in profile link -->
            @endauth
            @guest
            <a href="{{ route('login') }}">Login</a>&nbsp;&nbsp; | &nbsp;&nbsp;
            <a href="{{ route('register') }}"> Sign up</a>
            @endguest
        </div>        
        <div class="mobile-menu-list">
            <ul>
                <li>
                    <a href="/">
                        <i class="cv cvicon-cv-play-circle"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('articles.index') }}">
                        <i class="cv cvicon-cv-playlist"></i>
                        <p>Articles</p>                        
                    </a>                    
                </li>
            </ul>
        </div>
        @auth
        <a href="#" class="btn mobile-menu-logout">Log out</a>
        @endauth
    </div>
</div>
