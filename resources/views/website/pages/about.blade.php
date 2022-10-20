@extends('website.layouts.app')
@section('content')
    <section class="business_bliss_aboutus_front">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <h2 class="section-title">
                        About Teka Samuha Nepal
                    </h2>

                    <h3>Who We Are?</h3>
                    <p>Teka Samuha Nepal (TSN) is a non- governmental, non-profit organization dedicated for
                        biodiversity conservation and sustainable living.</p>
                    <h3> How We Work?</h3>
                    <p> We work in coordination with government, non-governmental organizations and local
                        communities.</p>
                    <h3> What We Do?</h3>
                    <p>We identify and work in the priority conservation areas by conducting participatory research and
                        engage the needy communities to deliver the sustainable result.</p>
                    <h3> About Teka Samuha Nepal</h3>
                    <p>  
                        Teka Samuha Nepal (TSN) is a non- governmental, non-profit organization run by a group of
                        committed professionals dedicated for biodiversity conservation and sustainable living. It is
                        registered in District Administration Office (DAO) Kathmandu since 1997 (B.S. 2054) and
                        affiliated with Social Welfare Council, Nepal.<br>
                        Teka has been collaborating with national and international stakeholders for biodiversity
                        conservation. Our past effort includes collaborating to publish annual bulletin &quot;The Snow
                        Leopard&quot;. We aim to develop long term species based, ecosystem based and landscape-based
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
                        through participatory research, awareness raising activities, capacity building and evidence-
                        based interventions.</p>
                    <h3> Objectives:</h3>
                    <p> a) Conduct applied research on flora, fauna and other biodiversity systems.<br>
                        b) Enhance environment education level among local communities and youth.<br>
                        c) Improve sustainable livelihood of communities.<br>
                        d) Strengthen network and collaboration with government and non-government
                        organization.<br></p>
                </div>
            </div>
        </div>
    </section>
    <div class="business_bliss_team">
        @php $team = $frontend_helper->getPagesById(32) @endphp
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="section-title">
                        Our Team
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-1.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Daisy Chan</a></h4>
                        <span>Web designer </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-2.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Miller Brown</a></h4>
                        <span>Wordpress developer </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-3.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Sally Kate</a></h4>
                        <span>Prototype Speciliest</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="business_bliss_team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="section-title">
                        Our Advisers
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-1.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Daisy Chan</a></h4>
                        <span>Web designer </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-2.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Miller Brown</a></h4>
                        <span>Wordpress developer </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-3.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Sally Kate</a></h4>
                        <span>Prototype Speciliest</span>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="business_bliss_team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="section-title">
                        Intern/ Volunteer
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-1.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Daisy Chan</a></h4>
                        <span>Web designer </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-2.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Miller Brown</a></h4>
                        <span>Wordpress developer </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box">
                        <figure><img src="assets/images/team-3.png" alt="" width="800" height="800">
                            <div class="overlay"></div>
                            <a href="" class="link-icon"><i class="fas fa-link"></i></a>
                        </figure>
                        <h4><a href="#">Sally Kate</a></h4>
                        <span>Prototype Speciliest</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="business_bliss_client_logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="section-title">
                        Our Donors and Partners
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme client_logo">
                        <div class="item">
                            <img src="assets/images/client-logo-1.png" alt="" class="img-fluid ">
                        </div>
                        <div class="item">
                            <img src="assets/images/client-logo-2.png" alt="" class="img-fluid ">
                        </div>
                        <div class="item">
                            <img src="assets/images/client-logo-3.png" alt="" class="img-fluid ">
                        </div>
                        <div class="item">
                            <img src="assets/images/client-logo-4.png" alt="" class="img-fluid ">
                        </div>
                        <div class="item">
                            <img src="assets/images/client-logo-6.png" alt="" class="img-fluid ">
                        </div>
                        <div class="item">
                            <img src="assets/images/client-logo-7.png" alt="" class="img-fluid ">
                        </div>
                        <div class="item">
                            <img src="assets/images/client-logo-8.png" alt="" class="img-fluid ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
