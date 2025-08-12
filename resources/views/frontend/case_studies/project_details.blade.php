@extends("layouts.front.app")

@section("title", $metatitle)
@section("description", $metaDescription)

@section("content")


    @section('heads')

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $metatitle}}" />
        <meta property="og:description" content="{{ $metaDescription }}" />
        <meta property="og:url" content="https://digirushsolutions.com" />
        <meta property="og:site_name" content="Digi Rush Solutions" />
        <meta property="article:modified_time" content="2024-09-24T09:20:07+00:00" />
        <meta property="og:image" content="#" />
        <meta property="og:image:width" content="1080" />
        <meta property="og:image:height" content="1080" />
        <meta property="og:image:type" content="image/jpeg" />

    @endsection


    <section class="blogs-front spac">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contct_info text-center">
                        <div class="links text-center">
                            <h1 class="blog_heading_a">{{$case->title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-content_hero-wrapper spac">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog_inqury">
                        <div class="container">
                            <div class="row justify-content-center">
                                <?php
                                    ?>
                                <div class="col-lg-8 col-md-12  col-sm-12">
                                    <img class="img-fluid tips single_blog_injury single-bloged-opens"
                                        src="{{ custom_asset($case->banner) }}" alt="{{ $case->banner_alt }}">

                                    <p class="mt-3">{!! html_entity_decode($case->description) !!}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection