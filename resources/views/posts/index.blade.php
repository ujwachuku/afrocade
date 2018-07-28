@extends('layouts.master')

@section('title')
    @if($category == '')
        Afrocade Articles	
    @else
        Afrocade {{ ucfirst($category->name) }} Articles
    @endif
@endsection

@section('description')
    @if($category == '')
        Discover Africa's hidden art and musical gems from Afrocade
    @else
        Discover Africa's hidden art and musical gems from Afrocade's {{ ucfirst($category->name) }} articles
    @endif
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="content-wrapper head-div">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Featured Videos -->
                <div class="content-block">
                    <div class="cb-header">
                        @if($category != '')
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <ul class="list-inline">
                                    <li><a href="#" style="color: #F9490B !important;">{{ ucfirst($category->name) }} Articles</a></li>
                                </ul>
                            </div>
                        </div>                        
                        @endif
                        
                        @if($search)
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                                <ul class="list-inline">
                                    <li>
                                        <b>Search Results: </b> 
                                        <a href="#">{{ count($articles) }} {{ count($articles) > 1 || count($articles) == 0 ? 'articles' : 'article'}} found for search term "{{ $query }}"</a>
                                    </li>
                                </ul>
                            </div>                            
                        </div>
                        @endif
                    </div>
                    <div class="single-video video-mobile-02">
                        <div class="row">
                            @if(count($articles) > 0)
                            @foreach($articles as $article)
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="h-video row">
                                    <div class="col-sm-12 col-xs-6">
                                        <div class="v-img">
                                            <a href="{{ route('articles.show', $article->slug) }}" class="hvr-bob" onMouseover="afroHover.playclip()" onclick="afroClick.playclip()">
                                                <img src="{{ Voyager::image($article->thumbnail('cropped')) }}" alt="{{ $article->title }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-xs-6">
                                        <div class="v-desc">
                                            <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $articles->links() }}
                            @else
                            <div class="col-md-12">
                                <div class="alert alert-warning">
                                    No articles found at this time...
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /Featured Videos -->
            </div>
        </div>
    </div>
</div>	
@endsection

@section('scripts')
	
@endsection