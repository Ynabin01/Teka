@extends('website.layouts.app')
@section('content')
{{-- @dd($folders); --}}
    @if (isset($folders))
        <section class="gallery">
            <div class="container">
                <div class="row">
                    @foreach ($folders as $photo)
                    <div class="col-sm-4">
                        <a href="/{{ $photo->alias }}">
                            <div class="folder">
                                <div class="paper folder-pop"><img src="/uploads/banner_image/{{ $photo->banner_image }}" width="100%"></div>
                                <div class="paper folder-pop-middle"><img src="/uploads/banner_image/{{ $photo->banner_image }}" width="100%"></div>
                                <div class="paper folder-pop-last"><img src="/uploads/banner_image/{{ $photo->banner_image }}" width="100%"></div>
                            </div>
                            <h5 class="folder-text">{{ $photo->caption }}</h5>
                        </a>
                    </div>
                    @endforeach
                </div>

                {{-- <div class="row">
                    @foreach ($folders as $photo)
                        <div class="col-sm-4">
                            <a href="/{{ $photo->alias }}">
                                <div class="folder">
                                    <div class="paper folder-pop"><img src="/uploads/banner_image/{{ $photo->banner_image }}"
                                            width="100%"></div>
                                    <div class="paper folder-pop-middle"><img
                                            src="/uploads/banner_image/{{ $photo->banner_image }}" width="100%"></div>
                                    <div class="paper folder-pop-last"><img
                                            src="/uploads/banner_image/{{ $photo->banner_image }}" width="100%"></div>
                                </div>
                                <h5 class="folder-text">{{ $photo->caption }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </section>
    @endif
@endsection
