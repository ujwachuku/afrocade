@extends('layouts.master')

@section('title')
	
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

                <!-- Featured Articles -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="hidden-xs">Latest Articles</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                        @foreach($articles as $article)
                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="{{ route('articles.show', $article->slug) }}"><img src="{{  '/storage/'.$article->image }}" alt="{{  $article->title }}" width="350px" height="350px"></a> 
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{ route('articles.show', $article->slug) }}">{{  $article->title }}</a>
                                    </div>
                                    <div class="v-views">
                                        {{  $article->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
						@endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	
@endsection

@section('scripts')
	
@endsection