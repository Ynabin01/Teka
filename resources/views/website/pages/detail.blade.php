@extends('website.layouts.app')
@section('content')
    @if($page->parent_page_id == 4 || $page->parent_page_id == 5)
        @include('website.pages.vacancy')
    @else
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if($page->banner_image)
                            <figure>
                                <img src="{{asset('uploads/banner_image/'.$page->banner_image)}}" alt="">
                            </figure>
                        @endif
                        <h4>{{$page->nav_name}}</h4>
                        <p>{!! $page->long_content !!}</p>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
