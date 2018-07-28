@extends('layouts.master')

@section('title')
Bringing African music and art to the world	
@endsection

@section('description')
	
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
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <ul class="list-inline">
                                    <li><a href="#" style="color: #F9490B !important;">Post Categories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content avatars">
                        <div class="row">
                        	@foreach($categories as $category)
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="{{ route('categories.articles', $category->slug) }}"><img src="{{ $category->image == '/images/logo.png' ? '/images/logo.png' : Voyager::image($category->thumbnail('cropped')) }}" alt=""><div class="note">{{ $category->name }}</div></a></div>
                            @endforeach                            
                        </div>
                    </div>
                </div>
                <!-- /Featured Categories -->
                @endif
				<div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Featured</span>
                                            <span class="hidden-xs">Featured Articles</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist--off">
                        <div class="single-video video-mobile-02">
                            <div class="row">
                            	@foreach($articles as $article)
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="h-video row">
                                        <div class="col-sm-12 col-xs-6">
                                            <div class="v-img">
                                                <a href="{{ route('articles.show', $article->slug) }}" class="hvr-bob"><img src="{{ Voyager::image($article->thumbnail('cropped')) }}" alt="{{ $article->title }}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-6">
                                            <div class="v-desc">
                                                <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
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
            </div>
        </div>
    </div>
</div>	
@endsection

@section('scripts')
	
@endsection