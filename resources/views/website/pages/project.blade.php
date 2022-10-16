@extends('website.layouts.app')
@section('content')
    <section class="business_bliss_services layout_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <h2 class="section-title">
                        {{$page->nav_name}}
                    </h2>
                </div>
            </div>
            <div class="row">
                @forelse($page->childs as $child)
                    <div class="col-lg-3 col-sm-6 col-xs-12 services-list">
                        <div class="box">
                            <a href="{{route('pages',$child->alias)}}">
                                @if($child->banner_image)
                                    <figure>
                                        <img src="{{Image::make('uploads/banner_image/'.$child->banner_image,'project')->toUrl()}}" alt=""/>
                                    </figure>
                                @endif
                                <h3>{{$child->nav_name}}</h3>
                                <p>{!! $child->short_content !!}</p>
                            </a>
                        </div>
                    </div>
                @empty
                    No Projects Available
                @endforelse
            </div>
        </div>
    </section>
@endsection
