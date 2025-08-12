
@extends("layouts.front.app")

@section("title", $metatitle)
@section("description", $metaDescription)

@section("content")
    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="las la-search"></i>
                </button>
            </form>
            <div class="search-close"><i class="las la-times"></i></div>
        </div>
    </div>
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <section class="page-header page-header-secnd" style="background-image: url(front_assets/img/blog_banner.png);">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h1>Get the updated news <br>from our redias blog</h1>
                <p>Everything your digital consulting business <br>needs is already here</p>
            </div>
        </div>
    </section>
    <!--/.page-header-->
    
    <section class="blog-section blog-page bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <div class="row grid-post">
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog1.jpg" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Jan 24 2024</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3>
                                            <a href="blog-details.php" class="hover">SEO Copywriting Tips for Higher
                                                Rankings in 2024</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog2.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>May 16 2024</li>
                                        <li><i class="las la-tags"></i><a href="#">Branding</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3>
                                            <a href="blog-details.php">What are the 3 Phases of PPC?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog3.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>May 01 2024</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">What is Keywords and How it Helps For Me?</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog4.jpg" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Jan 23 2024</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">How Social Media Marketing Works and How it Helps in
                                                All Business Growth?</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog5.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Aug 07 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">GA4 vs Universal Analytics: Understanding the
                                                Evolution of Web Analytics</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog6.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>July 25 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">12 Steps to Get Your Website Indexed by Google</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog7.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>July 17 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">WordPress 6.3 Beta 4 is Released</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog8.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>June 13 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">Mobile-first Indexing: Adapting Your SEO Strategy
                                                for Mobile Users</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog9.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>June 05 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">Why is a dynamic website important for business
                                                growth?</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog10.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>May 19 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">Don’t Get Left Behind: How Content Updating Can Keep
                                                You Ahead in 2023.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog11.jpg" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Apr 21 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">The Future of Advertising: Why CTV Advertising is
                                                Here to Stay.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog12.jpg" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Apr 17 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">The Spirit of Punjab: Vaisakhi Celebrations at Digi
                                                Rush</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog13.jpg" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Apr 11 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">Which are the best trends in web development for
                                                2023?</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog14.jpg" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Apr 05 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">Exploring the latest New Features of PHP 8.2</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog15.png" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Mar 20 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">What are the top SEO trends to watch in 2023?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="front_assets/img/blog16.jpg" alt="post">
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Mar 13 2023</li>
                                        <li><i class="las la-tags"></i><a href="#">Design</a></li>
                                        <li><i class="las la-comment"></i><a href="#">Comments</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.php">With joy and color, Digi Rush celebrated Holi 2023
                                                with a bang</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--Sidebar-->
                </div>
            </div>
    </section>
    <!--Blog Section-->


@endsection
