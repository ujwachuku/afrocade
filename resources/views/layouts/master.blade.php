<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="
    @if(Route::currentRouteName() != 'home.index') 
        @yield('description') 
    @else 
    Afrocade seeks to bring African music and art to the world. Check out the latest African music and art here
    @endif
    ">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ url(Route::current()->uri()) }}">
    <meta property="og:description" content="
    @if(Route::currentRouteName() != 'home.index') 
        @yield('description') 
    @else 
    Afrocade seeks to bring African music and art to the world. Check out the latest African music and art here
    @endif
    ">
    <meta property="og:type" content="article">
    <meta property="og:image" content="">   
    <link rel="icon" href="favicon.png">

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
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a2f1623523c4397"></script>
<script>
var html5_audiotypes={
    "mp3": "audio/mpeg",
    "mp4": "audio/mp4",
    "ogg": "audio/ogg",
    "wav": "audio/wav"
}

var afroClick=createsoundbite("{{ asset('sounds/click.mp3') }}", "{{ asset('sounds/click.ogg') }}");
var afroHover=createsoundbite("{{ asset('sounds/whistle.mp3') }}", "{{ asset('sounds/whistle.ogg') }}");

function createsoundbite(sound){
    var html5audio=document.createElement('audio')
    if (html5audio.canPlayType){ //check support for HTML5 audio
        for (var i=0; i<arguments.length; i++){
            var sourceel=document.createElement('source')
            sourceel.setAttribute('src', arguments[i])
            if (arguments[i].match(/\.(\w+)$/i))
                sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
            html5audio.appendChild(sourceel)
        }
        html5audio.load()
        html5audio.playclip=function(){
            html5audio.pause()
            html5audio.currentTime=0
            html5audio.play()
        }
        return html5audio
    }
    else{
        return {playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}
    }
}

</script>
@yield('scripts')
</body>
</html>
