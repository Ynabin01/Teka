<footer class="layout_two site-footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <section id="text-2" class="widget widget_about">
                        @php $about = $frontend_helper->getPagesById(2) @endphp
                        <div class="aboutwidget">
                            <div class="site-branding">
                                <h2 class="site-title">
                                    <a href="#" rel="home">Teka Samuha Nepal</a>
                                </h2>

                            </div>
                            <p>Teka Samuha Nepal is a non-profit organization formally registered in District
                                Administration Office Kathmandu in 1997 with the motive to initiate environment
                                awareness campaign through building local capacities in children, youth and adults.</p>

                            {{-- <p>{!! $about->long_content !!}</p> --}}
                        </div>
                    </section>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6">
                    <section id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="widget-title">Menu</h3>
                        <div class="menu-useful-links-container">
                            <ul id="menu-useful-links" class="menu">
                                @foreach ($menus as $menu)
                                    <li>
                                        <a href="{{ route('pages', $menu->alias) }}">{{ $menu->nav_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <section id="nav_menu-2" class="widget recent-post-widget">
                        <h3 class="widget-title">Recent Posts</h3>
                        <div class="popular-post-widget">
                            <ul>
                                <li>
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="{{ asset('website/assets/images/recent-post-1.jpg') }}"
                                                alt="recent post" width="80" height="80">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <a href="#"><span class="post-title">It showed a lady fitted out
                                                with</span></a>
                                        <p class="date"><i class="far fa-clock"></i>
                                            Dec 31 </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="{{ asset('website/assets/images/recent-post-2.jpg') }}"
                                                alt="recent post" width="80" height="80">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <a href="#"><span class="post-title">It showed a lady fitted out
                                                with</span></a>
                                        <p class="date"><i class="far fa-clock"></i>
                                            Dec 31 </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <section id="text-2" class="widget widget_text">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="textwidget">
                            <ul class="footer-info">
                                <li><i class="fas fa-phone-volume"></i> {{ $settings->phone }}</li>
                                <li><i class="fas fa-map-marker-alt"></i> {{ $settings->website_full_address }}</li>
                                <li><i class="far fa-envelope"></i> {{ $settings->site_email }}</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <p class=text-center>© 2021 Teka Samuha Nepal is Powered by <a href="#">Radiant InfoTech Nepal</a></p>
        </div>
    </div>
</footer>
