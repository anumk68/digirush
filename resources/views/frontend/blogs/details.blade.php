@extends("layouts.front.app")
@section("content")

    @section('heads')

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $blog->meta_title}}" />
        <meta property="og:description" content="{{ $blog->meta_description }}" />
        <meta property="og:url" content="https://digirushsolutions.com" />
        <meta property="og:site_name" content="Digi Rush Solutions" />
        <meta property="article:modified_time" content="2024-09-24T09:20:07+00:00" />
        <meta property="og:image" content="#" />
        <meta property="og:image:width" content="1080" />
        <meta property="og:image:height" content="1080" />
        <meta property="og:image:type" content="image/jpeg" />

    @endsection


    <section class="deatil_blog_page page-header page-header-secnd blogs-front spac"
        style="background-image: url({{ custom_asset('front_assets/img/single_blog_deatail_img.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contct_info text-center">
                        <div class="links text-center">
                            <h1 class="blog_heading_a blogssss">{{$blog->title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-content_hero-wrapper spac">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog_inqury">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-12  col-sm-12">
                                    <div class="main_blog_under">
                                        <img class="img-fluid tips single_blog_injury single-bloged-opens"
                                            src="{{ custom_asset($blog->banner) }}" alt="{{ $blog->banner_alt }}">
                                        <p class="mt-3"> {!! $blog->description !!}</p>
                                    </div>
                                    <div class="feedback-container">
                                        <p><strong>Was this article helpful?</strong></p>
                                        <div id="buttonGroup">
                                            <button id="yesBtn" class="default-btn feedback-btn"><i
                                                    class="fa-solid fa-check"></i> Yes</button>
                                            <button id="noBtn" class="default-btn feedback-btn">✘ No</button>
                                        </div>

                                        <div id="yesResponse" class="response-box response-success">
                                            Thanks 👍 for your feedback
                                        </div>

                                        <div id="noResponse" class="response-box response-error bg-white">
                                            Watch detailed video here (<a href="{{$blog->video_url}}" target="_blank"><span
                                                    style="color: black">{{ $blog->video_url }}</span></a>)
                                        </div>
                                    </div>



                                    <script>
                                        const yesBtn = document.getElementById("yesBtn");
                                        const noBtn = document.getElementById("noBtn");
                                        const yesResponse = document.getElementById("yesResponse");
                                        const noResponse = document.getElementById("noResponse");
                                        const buttonGroup = document.getElementById("buttonGroup");

                                        yesBtn.addEventListener("click", function () {
                                            yesResponse.style.display = "block";
                                            noResponse.style.display = "none";
                                            buttonGroup.style.display = "none";
                                        });

                                        noBtn.addEventListener("click", function () {
                                            noResponse.style.display = "block";
                                            yesResponse.style.display = "none";
                                            buttonGroup.style.display = "none";
                                        });
                                    </script>


                                </div>
                                <div class="col-lg-4 col-md-12  col-sm-12">
                                    <div class="fixed_right">
                                        <div class="right_recent_post">
                                            <div class="under_blog_recent">
                                                <h2><i class="fa-solid fa-bars"></i> &nbsp; Recent Blog</h2>
                                                <ul>
                                                    <li>

                                                        @foreach($allblogs as $blogs)
                                                            <div class="flex_recently_by">
                                                                <div class="recently">
                                                                    <a href="{{ url('blogs/' . $blogs->slug) }}">
                                                                        <div class="img_blog_recent">
                                                                            <img src="{{ custom_asset($blogs->banner) }}"
                                                                                alt="Blog Image">
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                                <div class="text_recently">
                                                                    <p class="mb-0">
                                                                        <a href="{{ url('blogs/' . $blogs->slug) }}">{{ \Illuminate\Support\Str::limit($blogs->title, 50) }}

                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form_bloging_main">
                                        <div class="main_subscription_form  new_digital_form">
                                            <div class="under_form_sestion">
                                                <!-- <h2>Get Your Quote Now</h2> -->
                                                <div class="main_gif_heading">
                                                    <img src="{{custom_asset('front_assets/img/40_GIF.gif')}}" alt="" style="height: 160%;width: 100%;
            max-width: 148px;
           ">
                                                    <h2>Upgrade Your Online Presence Today! </h2>
                                                </div>
                                                <form method="post" action="{{ route('seoform.submit') }}"
                                                    id="contact-form">
                                                    @csrf
                                                    <input type="hidden" name="city_name" value="company">
                                                    <div class="form-field">
                                                        <input type="text" id="fname" name="fname" placeholder="Full Name"
                                                            value="{{ old('fname') }}">
                                                        @error('fname')
                                                            <div class="error-message" style="color:red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-field">
                                                        <input type="email" id="email" name="email" placeholder="Email"
                                                            value="{{ old('email') }}">
                                                        @error('email')
                                                            <div class="error-message" style="color:red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-field">
                                                        <input type="text" id="city" name="city" placeholder="City"
                                                            value="{{ old('city') }}">
                                                        @error('city')
                                                            <div class="error-message" style="color:red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-field">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <select name="countryCode">
                                                                    <option data-countryCode="IN" value="91" {{ old('countryCode') == '91' ? 'selected' : '' }}>Ind
                                                                        (+91)</option>
                                                                    <option data-countryCode="UK" value="44" {{ old('countryCode') == '44' ? 'selected' : '' }}>UK
                                                                        (+44)</option>
                                                                    <option data-countryCode="US" value="1" {{ old('countryCode') == '1' ? 'selected' : '' }}>US (+1)
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <input type="text" id="phone" name="number" minlength="10"
                                                                maxlength="10" class="form-control"
                                                                value="{{ old('number') }}">
                                                        </div>
                                                        @error('number')
                                                            <div class="error-message" style="color:red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-field">
                                                        <input type="text" id="url" name="message"
                                                            placeholder="Your Website" value="{{ old('message') }}">
                                                        <small style="color: grey; font-size: 14px;">Example: www.google.com
                                                            (Full Domain
                                                            Name)</small>
                                                        @error('message')
                                                            <div class="error-message" style="color:red;">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div id="otp-group4" style="display:none;">
                                                        <label for="otp">Enter OTP</label>
                                                        <input type="text" name="otp" class="form-control" />
                                                    </div>
                                                    <p id="message" style="color:red; margin-top: 10px;"></p>
                                                    <div class="form-field">
                                                        <button id="submit" class="default-btn"
                                                            type="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button_all"
                                        style="background-image: url({{ custom_asset('front_assets/img/anout_banner_ne.png') }});">
                                        <div class="flex_firstly">
                                            <div class="btn_main_downloads">
                                                <a href="{{ route('contact') }}" class="default-btns">Contact Us</a>
                                            </div>
                                            <div class="btn_main_downloads">
                                                <a href="#" class="default-btns">Live Chat</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection