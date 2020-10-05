@extends('layouts.master')

@section('title')
Celebrating African excellence with the world	
@endsection

@section('description')
Afrocade was created to tell stories about African excellence and change the narrative about Africa and Africans.	
@endsection

@section('image')
{{ asset('/images/logo-white-big.jpg') }}
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">				
                 @if(count($categories) > 0)
                <!-- Featured Categories -->
                <div class="content-block">
                    <div class="cb-content avatars">
                        <div class="row">
                        	@foreach($categories as $category)
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="{{ route('categories.articles', $category->slug) }}" class="hvr-grow" onMouseover="afroHover.playclip()" onclick="afroClick.playclip()"><img src="{{ $category->image == '/images/logo.png' ? '/images/logo.png' : asset(Voyager::image($category->thumbnail('cropped'))) }}" alt=""><div class="note">{{ $category->name }}</div></a></div>
                            @endforeach                            
                        </div>
                    </div>
                </div>
                <!-- /Featured Categories -->
                @endif
                <div class="content-block head-div">                    
                @foreach($articles as $key => $value)
				<div class="content-block head-div">
                    <div class="cb-content videolist--off">
                        <div class="single-video video-mobile-02">
                            <div class="row">
                            	@foreach($value as $article)
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="h-video row">
                                        <div class="col-sm-12 col-xs-6">
                                            <div class="v-img">
                                                <a href="{{ route('articles.show', $article->slug) }}" class="hvr-bob" onMouseover="afroHover.playclip()" onclick="afroClick.playclip()"><img src="{{ asset(Voyager::image($article->thumbnail('cropped'))) }}" alt="{{ $article->title }}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-xs-6">
                                            <div class="v-desc">
                                                <a href="{{ route('articles.show', $article->slug) }}" title="{{  $article->title }}">{{ substr($article->title, 0, 60) }}...</a>
                                            </div>
                                            <div class="v-views">
                                                {{  $article->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Featured Articles -->
                @endforeach
            </div>
        </div>
    </div>
</div>	
@endsection

@section('scripts')

@endsection