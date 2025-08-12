@extends('layouts.front.app')
@section('content')
    <section class="page-header page-header-secnd"
        style="background-image: url({{ custom_asset('front_assets/img/about_banner_.jpg') }});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-header-info">
                        <h1>About us</h1>
                        <p>Digi Rush Solutions - Your Trusted Digital Partner</p>
                        <div class="btn_digital">
                            <a href="{{ route('contact') }}" class="default-btn">Hire Now</a>
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
                                       @error('message')
                                        <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <p id="message" style="color:red; margin-top: 10px;"></p>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Submit</button>
                                </div>
                            </form>
                            <!-- <p id="message" style="color:red; margin-top:10px;"></p> -->
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="about-section padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 sm-padding wow fade-in-left" data-wow-delay="200ms"
                    style="visibility: visible; animation-delay: 200ms; animation-name: fade-in-left;">
                    <div class="about-thumbs">
                        <img src="{{ custom_asset('front_assets/img/new_img_main.jpg') }}"
                            alt="web development company in india">
                        <div class="about-counter">
                            <h3><span class="odometer" data-count="1.5">00</span>k+</h3>
                            <span>Project Done</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="section-heading mb-20 sub_heading_response">
                        <span class="sub-heading">Who We Are</span>
                        <h2>About Digi Rush Solutions</h2>
                    </div>
                    <div class="about-content">
                        <p>Digi Rush Solutions is the best and top-rated IT solutions agency in India, offering a
                            comprehensive range of services from digital marketing to web services. As a leading web
                            development company in India and the <a href="{{ route('seo_company') }}">best SEO agency in
                                India</a>, we specialize in digital marketing services such as Search Engine Optimization
                            (SEO), Pay-Per-Click (PPC), Social Media Optimization (SMO), Social Media Marketing (SMM),
                            Content Management and Marketing System (CMS), Email Marketing, and more. </p>
                        <p>In web services, we provide expert solutions in Web Redesign, Web Design, Web Development, App
                            Development and Integration, Web Maintenance, Hosting, Domain services, and beyond. Our
                            expertise in web design and development leverages the latest strategies and technologies across
                            platforms like WordPress, PHP, Laravel, and HTML. Using today’s cutting-edge digital marketing
                            techniques, we drive immediate results for website visibility and brand ranking on SERPs. Our
                            dedicated team of experts in digital marketing and web development consistently delivers
                            fruitful results for our clients.</p>
                        <a href="{{ route('contact') }}" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vision_mission_value">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="vision_under">
                        <div class="icon_img abt_icon_img_hd">
                            <img src="{{ custom_asset('front_assets/img/mission _immg.png') }}"
                                alt="website development company in india">
                            <h3>Our Mission</h3>
                        </div>
                        <div class="main_mission_under">
                            <p>Digi Rush Solutions produces groundbreaking innovations in the field of digital marketing and
                                web development, further uplifting businesses to new heights of their visibility,
                                engagement, and growth. We strive to strengthen the brand through innovative strategies,
                                providing ways for improvement and thrust in the digital world. Focusing on delivering
                                superior services in areas such as SEO, PPC, web development, and many more, we look forward
                                to driving measurable results for our clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="vision_under">
                        <div class="icon_img abt_icon_img_hd">
                            <img src="{{ custom_asset('front_assets/img/vision _immg.png') }}"
                                alt="best website design and development company in india">
                            <h3>Our Vision</h3>
                        </div>
                        <div class="main_mission_under">
                            <p>Our vision will be to be at the forefront in the world of IT solutions, striving for
                                excellence in the digital marketing and web services world. We strive to be constantly
                                evolving as we embrace the new trends and techniques that help businesses stay ahead at the
                                curve. We look to establish long-term relationships with our clients, envisioning a path to
                                becoming the partner for businesses that will thrive in the exciting world of digital.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="vision_under">
                        <div class="icon_img abt_icon_img_hd">
                            <img src="{{ custom_asset('front_assets/img/value_immg.png') }}"
                                alt="best website development company in india">
                            <h3>Value</h3>
                        </div>
                        <div class="main_mission_under">
                            <p>We stay ahead by embracing both the latest and earliest technologies to provide the best
                                solutions efficiently. We are committed to integrity, working transparently and ethically to
                                build trust with our clients. Our dedicated team exceeds expectations, driven by a passion
                                for success. Through teamwork and open communication, we foster strong client relationships.
                                Striving for excellence, we ensure every project is executed with precision, from digital
                                marketing campaigns to complex web development tasks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video-section">
        <div class="shape-wrap">
            <div class="shape"></div>
            <div class="shape red"></div>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 sm-padding">
                    <div class="section-heading mb-40">
                        <span class="sub-heading">Follow us</span>
                        <h2 class="white">Get Latest Updates on Digital Marketing and Web Services Latest Trends.</h2>
                        <a href="{{ route('contact') }}" class="default-btn">Get In Touch</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 sm-padding">
                    <div class="play-btn-wrap">
                        <a href="https://www.youtube.com/@digirushsolutions" class="play-btn">
                            <span class="play-icon">
                                <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section-2 bg-grey padding">
        <div class="container">
            <div class="section-heading-wrap mb-40">
                <div class="section-heading">
                    <span class="sub-heading">Clients Testimonials</span>
                    <h2>What our customers tell <br>about our Business</h2>
                </div>
                <div class="review-box">
                    <span class="fw-semibold">( 4.6</span>
                    <span class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </span>
                    <span class="review-count">54 reviews )</span>
                    <button class="btn-review ms-3" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        Write A Review
                    </button>
                </div>
                <div class="carousel-navigation">
                    <button class="carousel-button-prev"><i class="las la-long-arrow-alt-left"></i></button>
                    <button class="carousel-button-next"><i class="las la-long-arrow-alt-right"></i></button>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="testimonial-carousel-wrapper">
                    <div class="testimonial-carousel-2 testimonial-card">
                        <div class="swiper-wrapper">
                            @foreach ($review_list as $reviewss)

                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>{{$reviewss->review}}</p>
                                        <div class="testi-author">
                                            <div class="author-infomain">
                                                @if(!empty($reviewss->image))
                                                    <div>
                                                        <img src="{{ asset('public/' . $reviewss->image) }}"
                                                            alt="{{ $reviewss->name }}"
                                                            style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                                                    </div>
                                                @else
                                                    <div class="author-initial">
                                                        {{ strtoupper(substr($reviewss->name, 0, 1)) }}
                                                    </div>
                                                @endif
                                                <div class="author-info">
                                                    <span>{{$reviewss->name}}</span>
                                                    <div class="star_authorrr">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>
   
    <section class="our_work_connector">
        <div class="container main-wrapper">
            <div class="row align-items-center">
                <!-- Circle -->
                <div class="col-md-4 d-flex justify-content-center mb-4 mb-md-0">
                    <div class="circle-box">
                        <div class="circle-inner">
                            <div class="mb-2"><i class="bi bi-lightbulb-fill fs-2 text-warning"></i></div>
                            <h5>Understanding Your Business Goals</h5>
                            <p>We start by gaining a thorough understanding of your business, industry, target audience, and
                                long-term vision. </p>
                        </div>
                    </div>
                </div>

                <!-- Steps -->
                <div class="col-md-8 position-relative steps-wrapper">
                    <div class="vertical-line"></div>

                    <div class="step-block">
                        <div class="step-circle step-1">01</div>
                        <div class="step-content">
                            <div class="step-icon"><i class="bi bi-megaphone-fill"></i></div>
                            <div class="step-text">
                                <h6>Planning the Website or Campaign</h6>
                                <p>Once your goals are clear, we map out a comprehensive plan that covers content structure,
                                    user journey, SEO focus, and platform requirements. This phase ensures clarity,
                                    direction, and a smooth workflow for the entire project.</p>
                            </div>
                        </div>
                    </div>

                    <div class="step-block">
                        <div class="step-circle step-2">02</div>
                        <div class="step-content">
                            <div class="step-icon"><i class="bi bi-megaphone-fill"></i></div>
                            <div class="step-text">
                                <h6>Design & Development</h6>
                                <p>Our creative team builds visually appealing, user-centric designs that reflect your brand
                                    identity. Meanwhile, our developers ensure the backend is technically sound, responsive,
                                    and optimized for performance, speed, and future scalability.</p>
                            </div>
                        </div>
                    </div>

                    <div class="step-block">
                        <div class="step-circle step-3">03</div>
                        <div class="step-content">
                            <div class="step-icon"><i class="bi bi-megaphone-fill"></i></div>
                            <div class="step-text">
                                <h6>Testing & Review</h6>
                                <p>Before going live, every component is rigorously tested for functionality, compatibility,
                                    usability, and performance. We also conduct client walkthroughs to gather feedback and
                                    ensure the final product meets expectations and business standards.</p>
                            </div>
                        </div>
                    </div>

                    <div class="step-block">
                        <div class="step-circle step-4">04</div>
                        <div class="step-content">
                            <div class="step-icon"><i class="bi bi-megaphone-fill"></i></div>
                            <div class="step-text">
                                <h6>Launch & Ongoing Support</h6>
                                <p>After launch, we provide continuous monitoring, updates, and technical support. Our team
                                    stays engaged to ensure your website or campaign performs optimally and evolves with
                                    your business needs and market trends.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel">Login/Register With Your Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <input type="email" id="userEmail" class="form-control mb-2" placeholder="Enter your email">
                    <div id="emailError" class="text-danger small mb-2"></div>
                    <button class="btn btn-primary" onclick="submitEmail()">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- OTP Modal -->
    <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel">Enter OTP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <input type="text" id="otpField" class="form-control mb-2" placeholder="Enter OTP">
                    <div id="otpSuccess" class="text-success small mb-1"></div>
                    <div id="otpError" class="text-danger small mb-2"></div>
                    <button class="btn btn-primary" onclick="verifyOTP()">Verify OTP</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Review Form Modal -->
    <div class="modal fade" id="reviewFormModal" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewFormLabel">Add Reviews</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <!-- Star rating -->
                    <input type="hidden" id="selectedRating" value="0">
                    <div class="mb-3 star-rating">
                        <span class="star" data-value="1">&#9734;</span>
                        <span class="star" data-value="2">&#9734;</span>
                        <span class="star" data-value="3">&#9734;</span>
                        <span class="star" data-value="4">&#9734;</span>
                        <span class="star" data-value="5">&#9734;</span>
                    </div>

                    <input type="hidden" id="hiddenOtp">
                    <input type="text" id="reviewName" class="form-control mb-2" placeholder="Enter your name">
                    <textarea id="reviewText" class="form-control mb-2" placeholder="Share your experience"></textarea>
                    <input type="file" id="reviewImage" class="form-control mb-3">
                    <div id="reviewError" class="text-danger small mb-2"></div>
                    <button class="btn btn-primary" onclick="submitReview()">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title">Thank You!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Your review has been submitted successfully.</p>
                </div>
            </div>
        </div>
    </div>


    <script>
        function submitEmail() {
            const email = document.getElementById("userEmail").value.trim();
            const emailError = document.getElementById("emailError");
            emailError.textContent = "";

            if (email === "") {
                emailError.textContent = "Please enter your email before proceeding.";
                return;
            }
            $.ajax({
                url: '{{ url("send-review-otp") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email: email
                },
                success: function (response) {
                    if (response.message && response.message.toLowerCase().includes("otp")) {
                        bootstrap.Modal.getInstance(document.getElementById('reviewModal')).hide();
                        setTimeout(() => {
                            document.getElementById('otpSuccess').textContent = response.message;
                            document.getElementById('otpError').textContent = "";
                            new bootstrap.Modal(document.getElementById('otpModal')).show();
                        }, 300);
                    } else {
                        emailError.textContent = response.message || "Failed to send OTP.";
                    }
                },
                error: function () {
                    emailError.textContent = "This email is already taken.";
                }
            });
        }

        function verifyOTP() {
            const otp = document.getElementById("otpField").value.trim();
            const otpError = document.getElementById("otpError");
            const otpSuccess = document.getElementById("otpSuccess");
            otpError.textContent = "";
            otpSuccess.textContent = "";
            if (otp === "") {
                otpError.textContent = "Please enter OTP before proceeding.";
                return;
            }
            $.ajax({
                url: '{{ url("/review-otp-verify") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    otp: otp
                },
                success: function (response) {
                    if (response.success) {
                        bootstrap.Modal.getInstance(document.getElementById('otpModal')).hide();
                        setTimeout(() => {
                            document.getElementById('hiddenOtp').value = otp;
                            new bootstrap.Modal(document.getElementById('reviewFormModal')).show();
                        }, 300);
                    } else {
                        otpError.textContent = response.message || "Invalid OTP. Please try again.";
                    }
                },
                error: function () {
                    otpError.textContent = "Something went wrong. Please try again.";
                }
            });
        }

        function submitReview() {
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('otp', document.getElementById('hiddenOtp').value);
            formData.append('name', document.getElementById('reviewName').value);
            formData.append('rating', document.getElementById('selectedRating').value);
            formData.append('review', document.getElementById('reviewText').value);
            const imageFile = document.getElementById('reviewImage').files[0];
            if (imageFile) {
                formData.append('image', imageFile);
            }
            $.ajax({
                url: "{{ url('review-otp-verify')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.success) {
                        bootstrap.Modal.getInstance(document.getElementById('reviewFormModal')).hide();
                        setTimeout(() => {
                            new bootstrap.Modal(document.getElementById('thankYouModal')).show();
                        }, 300);
                    }
                },
                error: function (xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;
                        document.getElementById('reviewError').textContent = Object.values(errors).flat().join(' ');
                    } else {
                        document.getElementById('reviewError').textContent = "Something went wrong. Please try again.";
                    }
                }
            });
        }
        document.addEventListener('DOMContentLoaded', function () {
            const stars = document.querySelectorAll('.star-rating .star');
            const ratingInput = document.getElementById('selectedRating');
            stars.forEach(star => {
                star.addEventListener('click', function () {
                    const rating = parseInt(this.getAttribute('data-value'));
                    ratingInput.value = rating;
                    stars.forEach(s => {
                        const val = parseInt(s.getAttribute('data-value'));
                        s.innerHTML = val <= rating ? '&#9733;' : '&#9734;';
                    });
                });
            });
        });
    </script>


@endsection