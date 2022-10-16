<section class="mp_corpo-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12  col-sm-12">
                <div class="section-title" data-title="Our Blog">
                    <h2>{{$page->nav_name}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($page->childs as $child)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <article>
                        @if($child->banner_image)
                            <figure>
                                <a href="{{route('pages',$child->alias)}}">
                                    <img width="670" height="500"
                                         src="{{asset('uploads/banner_image/'.$child->banner_image)}}" alt="">
                                </a>
                            </figure>
                        @endif
                        <div class="entry-content">
                            <div class="title-box ">
                                <h4 class="entry-title"><a
                                            href="{{route('pages',$child->alias)}}">{{$child->nav_name}}</a></h4>
                            </div>
                            <p>{!! $child->short_content !!}
                            </p>
                        </div>
                    </article>
                </div>
            @empty
                No Data Available
            @endforelse
        </div>
    </div>
</section>
