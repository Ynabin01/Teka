@extends('website.layouts.app')
@section('content')

    <section class="business_bliss_slider">
        <div id="main-slider" class="owl-carousel owl-theme main_slider">
            @foreach($sliders->navigationitems as $slider)
                <div class="item">
                    <img src="{{Image::make('uploads/photo_gallery/'.$slider->file,'slider')->toUrl()}}">
                </div>
            @endforeach
        </div>
    </section>


    <section class="business_bliss_aboutus_front">
        @php $about = $frontend_helper->getPagesById(2) @endphp
        <div class="container">
            <div class="row">
                @if($about)
                    <div class="col-lg-5 col-md-6  col-sm-12">
                        <h2 class="section-title">
                            Teka Samuha Nepal
                        </h2>
                        <p>{!! $about->long_content !!}</p>
                        <div>
                            <a href="{{route('pages',$about->alias)}}" class="link btn_green">Learn More</a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-12">
                        @if($about->banner_image)
                            <img src="{{asset('uploads/banner_image/'.$about->banner_image)}}" alt="" width="670"
                                 height="500">
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section>


    <section class="business_bliss_services layout_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <h2 class="section-title">
                        Our Projects
                    </h2>
                </div>
            </div>
            @php $completedProjects = $frontend_helper->getPagesById(8) @endphp
            <div class="row">
                @forelse($completedProjects->childs as $project)
                    <div class="col-lg-3 col-sm-6 col-xs-12 services-list">
                        <div class="box">
                            <a href="{{route('pages',$project->alias)}}">
                                @if($project->banner_image)
                                    <figure>
                                        <img src="{{Image::make('uploads/banner_image/'.$project->banner_image,'project')->toUrl()}}"
                                             alt=""/>
                                    </figure>
                                @endif
                                <h3>{{$project->nav_name}}</h3>
                                <p>{!! $project->short_content !!}</p>
                            </a>
                        </div>
                    </div>
                @empty
                    No Projects
                @endforelse
            </div>
        </div>
    </section>

    <section class="call_to_action layout_two"
             style="background:  url('{{asset('website/assets/images/service_bg.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-7 col-sm-12">
                    <h4>Contact Us For <br>
                        Volunteer Opportunities</h4>
                </div>
                <div class="col-xl-6 col-md-5 col-sm-12">
                    <div class="add-contact">
                        <span class="call-us"><i class="fas fa-phone-volume"></i>Phone : {{$settings->phone}}</span>
                        <span class="call-us mail-us"><i
                                    class="fas fa-envelope"></i>Mail us : {{ $settings->site_email }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-main">
        @php $latestNews = $frontend_helper->getPagesById(20) @endphp
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="section-title">
                        Latest News
                    </h2>
                </div>
            </div>
            <div class="row">
                @forelse($latestNews->childs as $news)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="box">
                            <div class="blog-head">
                                @if($news->banner_image)
                                    <a href="{{route('pages',$news->alias)}}">
                                        <img src="{{asset('uploads/banner_image/'.$news->banner_image)}}" alt="#"
                                             width="1024" height="680">
                                    </a>
                                @endif
                            </div>
                            <div class="blog-bottom">
                                <div class="blog-inner">
                                    <h3><a href="{{route('pages',$news->alias)}}">{{$news->nav_name}}</a></h3>
                                    <p>{!! $news->short_content !!}</p>
                                    <div class="meta">
                                        <span><i class="fa fa-calendar"></i><a
                                                    href="#">{{$news->created_at->format('d M, Y')}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection
