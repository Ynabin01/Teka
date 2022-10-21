@extends('website.layouts.app')
@section('content')
    @if ($page->parent_page_id == 4 || $page->parent_page_id == 5)
        @include('website.pages.vacancy')
        @include('website.pages.project')
    @else
        @if ($page->nav_name == 'About')
            <section class="business_bliss_aboutus_front">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <h2 class="section-title">
                                About Teka Samuha Nepal
                            </h2>

                        @php echo $normal->short_content; @endphp
                            {{-- <h3>Who We Are?</h3>
                            <p>Teka Samuha Nepal (TSN) is a non- governmental, non-profit organization dedicated for
                                biodiversity conservation and sustainable living.</p>
                            <h3> How We Work?</h3>
                            <p> We work in coordination with government, non-governmental organizations and local
                                communities.</p>
                            <h3> What We Do?</h3>
                            <p>We identify and work in the priority conservation areas by conducting participatory research
                                and
                                engage the needy communities to deliver the sustainable result.</p>
                            <h3> About Teka Samuha Nepal</h3>
                            <p>
                                Teka Samuha Nepal (TSN) is a non- governmental, non-profit organization run by a group of
                                committed professionals dedicated for biodiversity conservation and sustainable living. It
                                is registered in District Administration Office (DAO) Kathmandu since 1997 (B.S. 2054) and
                                affiliated with Social Welfare Council, Nepal.<br>
                                Teka has been collaborating with national and international stakeholders for biodiversity
                                conservation. Our past effort includes collaborating to publish annual bulletin &quot;The
                                Snow
                                Leopard&quot;. We aim to develop long term species based, ecosystem based and
                                landscape-based
                                approach and link livelihood upliftment.<br>
                                To combat human trafficking, Teka has joint hand with Alliance against Trafficking in Women
                                and Children in Nepal, AATWIN (www.aatwin.org.np) in 2002 and currently Teka is serving
                                AATWIN’s executive board as Treasurer. To support education to poor, physically challenged
                                and trafficking survival’s children, Teka has been providing scholarship support since 2006.
                                Teka also provides voluntary teaching and other activities for overseas individual.</p>
                            <h3> Vision:</h3>
                            <p>Creating a better space for biodiversity along with the improvement of community well-
                                being.</p>
                            <h3> Mission:</h3>
                            <p>To promote biodiversity conservation and sustainable livelihood of communities
                                through participatory research, awareness raising activities, capacity building and
                                evidence-
                                based interventions.</p>
                            <h3> Objectives:</h3>
                            <p> a) Conduct applied research on flora, fauna and other biodiversity systems.<br>
                                b) Enhance environment education level among local communities and youth.<br>
                                c) Improve sustainable livelihood of communities.<br>
                                d) Strengthen network and collaboration with government and non-government
                                organization.<br></p> --}}
                        </div>
                    </div>
                </div>

            </section>
        @else
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @if ($page->banner_image)
                                <figure>
                                    <img src="{{ asset('uploads/banner_image/' . $page->banner_image) }}" alt="">
                                </figure>
                            @endif
                            <h4>{{ $page->nav_name }}</h4>
                            {{-- <p>{!! $page->long_content !!}</p> --}}
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif
@endsection
