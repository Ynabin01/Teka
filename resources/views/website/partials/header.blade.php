<header>
    <div class="top-search top-search-bg">
        <div class="container">
            <form class="search-form" action="" method="GET" accept-charset="utf-8">
                <div class="input-group">
                      <span class="input-group-addon cursor-pointer">
                           <button class="search-form_submit fas fa-search font-size18 text-white"
                                   type="submit">
                           </button>
                      </span>
                    <input type="text" class="search-form_input form-control" name="s" autocomplete="off"
                           placeholder="Type &amp; hit enter...">
                    <span class="input-group-addon close-search"><i
                                class="fas fa-times font-size18 line-height-28 margin-5px-top"></i></span>
                </div>
            </form>
        </div>
    </div>
    <div class="business_bliss_top_bar top-bar-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="business_bliss_top_info_bar">
                        <ul>
                            <li><a href="tel:"><i class="fas fa-mobile-alt"></i> {{  $settings->phone}}</a></li>
                            <li><a href="mail:"><i class="fas fa-envelope"></i> {{ $settings->site_email }}</a></li>
                            <li><a href=""><i class="fas fa-marker"></i> {{ $settings->website_full_address }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="business_bliss_top_social_icon right">
                        <li><a href="{{$settings->facebook?$settings->facebook:'#'}}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="{{$settings->twitter?$settings->twitter:'#'}}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="{{$settings->google?$settings->google:'#'}}"><i
                                        class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="{{$settings->linkedin?$settings->linkedin:'#'}}"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="business_bliss_main_header main-header-bg header_sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-3 col-md-3 col-sm-7 logo">
                    <div class="site-branding">
                        @if($settings->site_logo)
                            <a href="{{url('/')}}" class="custom-logo-link">
                                <img width="290" height="50" src="{{asset('/uploads/icons/'.$settings->site_logo)}}"
                                     class="custom-logo" alt="Teka group"></a>
                        @else
                            <a href="{{url('/')}}" class="custom-logo-link">
                                <img width="290" height="50" src="{{asset('/website/assets/images/logo.png')}}"
                                     class="custom-logo" alt="Teka group"></a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-11 col-md-9 col-md-9 col-sm-12">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="main-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i
                                    class="fa fa-bars"></i></button>
                        <div class="search_main_menu">
                            <a href="javascript:void(0)"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="main-menu-container-collapse">
                            <ul id="primary-menu" class="menu nav-menu right" aria-expanded="false">
                                @forelse($menus as $menu)
                                    @if(count($menu->childs)>0)
                                        <li class="menu-item-has-children">
                                            <a href="#">{{$menu->nav_name}}</a>
                                            <ul class="sub-menu">
                                                @forelse($menu->childs as $child)
                                                    <li><a href="{{route('pages',$child->alias)}}">{{ $child->nav_name }}</a></li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="{{route('pages',$menu->alias)}}">{{$menu->nav_name}}</a></li>
                                    @endif
                                @empty
                                    <li> No Menu Items</li>
                                @endforelse
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
