<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ URL::current() }}">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="{{ Route::currentRouteName() == 'articles.show' ? 'article' : 'website' }}">
    @if(Route::currentRouteName() == 'articles.show')
    <meta property="article:author" content="@yield('author')">
    @endif
    <meta property="og:image" content="@yield('image')">
    <meta property="fb:app_id" content="519680525139475">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@afrocade_">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">
    <meta name="twitter:image:alt" content="@yield('title')">
   
    <link rel="icon" href="/images/favicon.png">

    <title>@yield('title') | AFROCADE</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-circle-video.css') }}" rel="stylesheet">
    <link href="Https://cdn.bootcss.com/hover.css/2.3.1/css/hover-min.css" rel="stylesheet">
    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>
    @yield('styles')
</head>

<body class="single-video light">

@include('partials.header')

@yield('content')

<!-- footer -->
@include('partials.footer')
<!-- /footer -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b6c9345574188ce"></script>
<script src="/js/jscroll.js"></script>
<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
    $('.infinite-scroll').jscroll({
        autoTrigger: true,
        loadingHtml: `<center><p class="text-primary"><i class="fa fa-circle-o-notch fa-2x fa-spin"></i></p></center>`,
        padding: 5,
        nextSelector: '.pagination li.active + li a',
        contentSelector: 'div.infinite-scroll',
        callback: function() {
        $('ul.pagination').remove();
        }
    });            
    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123389558-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123389558-1');
</script>

@yield('scripts')
</body>
</html>
