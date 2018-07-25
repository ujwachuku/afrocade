@extends('layouts.master')

@section('title')
Afrocade Articles	
@endsection

@section('description')
Discover Africa's hidden art and musical gems from Afrocade's blog	
@endsection

@section('styles')
	
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 v-categories side-menu">

                <!-- Articles -->
                <div class="content-block">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <ul class="list-inline">
                                    <li><a href="#" class="color-active">Articles</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content">
                        <div class="row">
                            <!-- <div class="col-md-2 col-sm-2 col-xs-2">
                                <aside class="sidebar-menu">
                                    <ul>
                                    	@foreach($categories as $category)
                                        <li><a href="#">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                    <div class="bg-add"></div>
                                </aside>
                            </div> -->
                            <div class="col-md-12 col-sm-12 col-xs-8">
                                <div class="row">
                                	@if(count($articles) > 0)
                                	@foreach($articles as $article)
                                    <!-- article -->
                                    <div class="col-md-4 col-xs-6 col-sm-3">
                                        <div class="b-category">
                                            <a href="{{ route('articles.show', $article->slug) }}"><img src="/storage/{{ $article->image }}" alt="{{ $article->title }}" width="350px" height="350px"></a>
                                            <a href="{{ route('articles.show', $article->slug) }}" class="name">{{ $article->title }}</a>
                                            <p class="desc">{{ $article->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{ $articles->links() }}
                                    @else
									<div class="alert alert-warning">
										There are no articles at this time...
									</div>
                                    @endif                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Articles -->

            </div>
        </div>
    </div>
</div>	
@endsection

@section('scripts')
	
@endsection