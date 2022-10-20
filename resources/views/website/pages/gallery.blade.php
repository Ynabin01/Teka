@extends('website.layouts.app')
@section('custom-css')
    <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>
@endsection
@section('content')
    <section class="gallery">
        <div class="container">
            <div class="gallery-view">
                <div class="row" id="lightgallery">
                    @foreach($photos as $photo)
                    <div class="item col-md-4" data-src="/uploads/photo_gallery/{{$photo->file}}" data-sub-html="<h4>{{$photo->caption}}</h4>">
                        <a href="">
                            <img src="/uploads/photo_gallery/{{$photo->file}}" alt="Blue Ocean" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-js')
    <script src="{{ asset('website/assets/gallery/picturefill.min.js') }}"></script>
    <script src="{{ asset('website/assets/gallery/lightgallery.js') }}"></script>
    <script src="{{ asset('website/assets/gallery/lg-pager.js') }}"></script>
    <script src="{{ asset('website/assets/gallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('website/assets/gallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('website/assets/gallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('website/assets/gallery/lg-hash.js') }}"></script>
    <script src="{{ asset('website/assets/gallery/lg-share.js') }}"></script>

    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>
@endsection
