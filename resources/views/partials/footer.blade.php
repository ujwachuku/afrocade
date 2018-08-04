<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-def">
                <div class="col-lg-1  col-sm-2 col-xs-12 footer-logo">
                    <a class="navbar-brand" href="/">
                        <img src="/images/logo.png" alt="{{ config('app.name') }}" class="logo" />                        
                    </a>
                </div>
                <div class="col-lg-7 col-sm-6 col-xs-12">
                    <div class="f-links">
                        <!-- <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>                            
                            <li><a href="#">Advertise</a></li>                            
                        </ul> -->
                    </div>
                    <div class="delimiter"></div>
                </div>
                <div class="col-lg-7 col-sm-6 col-xs-12">
                    <div class="f-copy">
                         <ul class="list-inline">
                            <!--<li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li> -->
                            <li>Copyright &copy; {{ date('Y') }} {{ config('app.name') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-4 col-xs-12">
                    <div class="f-last-line">
                        <div class="f-icon pull-left">
                            <a href="{{ setting('site.facebook')}}" target="_blank"><i class="fa fa-facebook-square"></i></a>
                            <a href="{{ setting('site.twitter')}}" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="{{ setting('site.instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="delimiter visible-xs"></div>
                </div>
            </div>
        </div>
    </div>
</footer>