@extends('layouts.master')

@section('title')
{{ $article->title }}	
@endsection

@section('description')
{{ $article->meta_description }}
@endsection

@section('image')
{{ asset('/storage/'.$article->image) }}   
@endsection

@section('author')
{{ $article->user->name }}    
@endsection

@section('styles')
 <link rel="stylesheet" href="{{ asset('js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelementplayer.min.css') }}" />
<link href="{{ asset('js/vendor/magnificPopup/dist/magnific-popup.css') }}" rel="stylesheet">	
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xs-12 col-sm-12">
                @if(!empty($article->video_url))
                <div class="sv-video">
                    <div class="video-responsive">
                        {!! $article->video_url !!}
                    </div>
                </div>
                @endif
                <h1><a href="#">{{ $article->title }}</a></h1>                     
                <p>{{ $article->user->name }}</p>
                <div class="info">
                    <div class="custom-tabs">
                        <div class="tabs-panel">
                            <a href="#" class="active" data-tab="tab-1" style="display: none;">                            
                            </a>                
                            
                        </div>
                        <div class="clearfix"></div>

                        <!-- BEGIN tabs-content -->
                        <div class="tabs-content">
                            <!-- BEGIN tab-1 -->
                            <div class="tab-1">
                                <div>
                                    {!! $article->body!!}
                                    <hr>
                                    @if(!empty($article->audio_url))
                                    <h4>Audio Narration :</h4>
                                    <span>
                                    	{!! $article->audio_url !!}
                                    </span>
                                    <hr>
                                    @endif                                    
                                    
                                    <div class="addthis_relatedposts_inline"></div>
            
                                    <div class="row date-lic">
                                        <div class="col-xs-6">
                                            <span>
                                                <h4>Posted:</h4>
                                                <p>{{ $article->created_at->toFormattedDateString() }}</p>
                                            </span>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <!-- END tabs-content -->
                    </div>                   
                    <div class="adblock2">
                        <a href="https://www.when.sale/" title="When" target="_blank" rel="nofollow">
                            <div class="img">
                                <span class="hidden-xs">
                                    <img src="/images/when-banner-1.jpg" alt="When">
                                </span>
                                <span class="visible-xs">
                                    <img src="/images/when-banner-1.jpg" alt="When" width="320px" height="50px">
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div id="disqus_thread"></div>                        
                    </div>                    
                </div>
                <div class="content-block head-div head-arrow visible-xs">
                    <div class="adblock2 adblock2-v2">
                        <a href="https://www.when.sale/" title="When" target="_blank" rel="nofollow">
                            <div class="img">
                                <img src="/images/when-banner-2.jpg" alt="When">
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- right column -->
            <div class="col-lg-3 col-xs-12 col-sm-12 hidden-xs">

                <!-- up next -->
                <div class="caption playlist">
                    <div class="left">
                        <a href="#"><b>You might also Like</b></a>
                    </div>                    
                    <div class="clearfix"></div>
                </div>
                <div class="list">
                	@foreach($upSells as $upSell)
                    <div class="h-video playlist row">
                        <div class="col-lg-5 col-sm-5 col-xs-6">
                            <div class="v-img">
                                <a href="{{ route('articles.show', $upSell->slug) }}" class="hvr-bob" onMouseover="afroHover.playclip()" onclick="afroClick.playclip()"><img src="{{ asset(Voyager::image($upSell->thumbnail('cropped'))) }}" alt="{{ $upSell->title }}"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-7 col-xs-6">
                            <div class="v-desc">
                                <a href="{{ route('articles.show', $upSell->slug) }}">{{ $upSell->title }}</a>
                            </div>
                            <div class="v-views">
                                {{ $upSell->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
					@endforeach                    
                </div>
                <!-- END up next -->

                <div class="adblock">
                    <a href="https://www.when.sale/" title="When" target="_blank" rel="nofollow">
                        <div class="img">
                            <img src="/images/when-banner-2.jpg" alt="When">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>	
@endsection

@section('scripts')
<script  src="{{ asset('js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelement-and-player.min.js') }}"></script>
<script src="{{ asset('js/vendor/clipboard/dist/clipboard.min.js') }}"></script>
<script  src="{{ asset('js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelement-and-player.min.js') }}"></script>
<script src="{{ asset('js/vendor/magnificPopup/dist/jquery.magnific-popup.min.js') }}"></script>
<script>

var url = '{{ URL::current() }}';
var disqus_config = function () {
this.page.url = url;
this.page.identifier = url;
};

(function() {
var d = document, s = d.createElement('script');
s.src = 'https://afrocade.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> 
@endsection