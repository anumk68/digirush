@extends('layouts.front.app')
@section('content')
    <section class="page-header page-header-secnd"
        style="background-image: url({{custom_asset('front_assets/img/case_study_banner.jpg')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>Case Studies</h1>
                        <p>Explore our successful projects that showcase innovative solutions and proven results,
                            highlighting our expertise across various industries.
                        </p>
                        <div class="btn_digital">
                            <a href="{{ route('contact') }}" class="default-btn"> Hire Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <!-- <h2>Get Your Quote Now</h2> -->
                            <div class="main_gif_heading">
                                <img src="{{custom_asset('front_assets/img/40_GIF.gif')}}" alt="" style="height: 160%;width: 100%;
            max-width: 148px;
           ">
                                <h2>Upgrade Your Online Presence Today!</h2>
                            </div>
                            <form method="post" action="{{ route('seoform.submit') }}" id="contact-form">
                                @csrf
                                <input type="hidden" name="city_name" value="digital_marketing">

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
                                    <input type="text" id="city" name="city" placeholder="City" value="{{ old('city') }}">
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
                                        <input type="text" id="phone" name="number" minlength="10" maxlength="10"
                                            class="form-control" value="{{ old('number') }}">
                                    </div>
                                    @error('number')
                                        <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-field">
                                    <input type="text" id="url" name="message" placeholder="Your Website"
                                        value="{{ old('message') }}">
                                    <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain
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
                                    <button id="submit" class="default-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding study_banner">
        <div class="container">
            <div class="studying_banner_heading">
                <h2>Unveiling Success: Our Project Highlights and Achievements</h2>
                <p>Welcome to our Case Studies page, where we showcase our successful projects that reflect our commitment
                    to excellence. As the <a href="{{ route('digital_marketing') }}">best digital marketing agency in
                        India,</a> we have helped numerous clients achieve their goals through tailored strategies and
                    innovative solutions. Our case studies highlight the impactful work of our team, including
                    collaborations with the best website developers in India. Whether you’re looking to enhance your online
                    presence or create a stunning website, you can hire a web designer from our talented team. Explore our
                    case studies to see how we can elevate your business to new heights.</p>
            </div>
            <div class="row">
                @foreach ($cases as $case)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="project-item">
                            <div class="project-thumb">

                                <a href="{{ route('case_details', $case->slug)  }}">
                                    <img src="{{ custom_asset($case->banner) }}" alt="best seo services in india">
                                </a>
                            </div>
                            <div class="project-content">
                                <h3><a href="{{ route('case_details', $case->slug)}}">{{ Str::limit($case->title, 36) }}</a>
                                </h3>
                                <a href="{{ route('case_details', $case->slug)}}" class="read-more">Read More<i
                                        class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection