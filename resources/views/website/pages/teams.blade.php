@extends('website.layouts.app')
@section('content')
    <div class="business_bliss_team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="section-title">
                        Our Team
                    </h2>
                </div>
            </div>
            <div class="row">
                <!------for loop to fetch data--->

                @foreach ($teams->childs as $team)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="box">
                            <figure><img src="/uploads/banner_image/{{ $team->banner_image ?? '' }}" alt="" width="800" height="800">
                                <div class="overlay"></div>
                                <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                            </figure>
                            <h4><a href="#">{{ $team->caption ?? '' }}</a></h4>
                            <span>{{ $team->short_content ?? '' }}</span>
                        </div>
                    </div>
                @endforeach

                <!-----for loop end---->
            </div>
        </div>
    </div>




@endsection
