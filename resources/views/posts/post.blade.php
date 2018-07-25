@extends('layouts.master')

@section('title')
{{ $article->title }}	
@endsection

@section('description')
{{ $article->meta_description }}
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
                        <iframe width="560" height="315" src="{!! $article->video_url !!}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                @endif
                <h1><a href="#">{{ $article->title }}</a></h1>
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
                                    	<iframe width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay" src="{!! $article->audio_url !!}"></iframe>
                                    </span>
                                    <hr>
                                    @endif
                                    <div class="row date-lic">
                                        <div class="col-xs-6">
                                            <h4>Posted:</h4>
                                            <p>{{ $article->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <!-- END tabs-content -->
                    </div>                   

                    <div class="adblock2">
                        <div class="img">
                            <span class="hidden-xs">
                                Google AdSense<br>728 x 90
                            </span>
                            <span class="visible-xs">
                                Google AdSense 320 x 50
                            </span>
                        </div>
                    </div>                    
                </div>
                <div class="content-block head-div head-arrow visible-xs">
                    <div class="adblock2 adblock2-v2">
                        <div class="img">
                            <span>Google AdSense 300 x 250</span>
                        </div>
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
                                <a href="{{ route('articles.show', $upSell->slug) }}"><img src="{{ '/storage/'.$upSell->image }}" alt="{{ $upSell->title }}"></a>
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
                    <div class="img">
                        Google AdSense<br>
                        336 x 280
                    </div>
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
@endsection