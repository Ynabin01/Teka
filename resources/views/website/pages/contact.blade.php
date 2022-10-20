@extends('website.layouts.app')
@section('content')
    <section class="business_bliss_contact_layout_two">
        <div class="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <h2 class="section-title">
                            Contact Us
                        </h2>

                        <div class="contact-icon">
                            <div class="contact-inner">
                                <a href="#"><i
                                            class="fas fa-map-marker-alt"></i><span>{{ $settings->website_full_address }}</span></a>
                                <a href="#"><i class="fas fa-phone-volume"></i><span>{{ $settings->phone }}</span></a>
                                <a href="#"><i class="fas fa-envelope"></i><span> {{ $settings->site_email  }}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div role="form" class="wpcf7" id="wpcf7-f59-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="{{ route('contactstore') }}" method="POST" class="wpcf7-form" novalidate="novalidate"  enctype='multipart/form-data'>
                                @csrf
                                <p><label> Your Name (required)<br>
                                        <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name" class="wpcf7-form-control wpcf7-text ">
                                </span>
                                    </label>
                                </p>
                                <p><label> Your Email (required)<br>
                                        <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" class="wpcf7-form-control wpcf7-text">
                                </span>
                                    </label>
                                </p>
                                <p><label> Subject<br>
                                        <span class="wpcf7-form-control-wrap your-subject">
                                    <input type="text" name="number" value="" class="wpcf7-form-control wpcf7-text">
                                </span>
                                    </label>
                                </p>
                                <p><label> Your Message<br>
                                        <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="message" class="wpcf7-form-control wpcf7-textarea"></textarea>
                                </span>
                                    </label></p>
                                <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span
                                            class="ajax-loader"></span></p>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
