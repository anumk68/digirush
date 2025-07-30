@extends('layouts.front.app')
@section('content')
<style>
    .error-message {
        color: red;
        font-size: 0.875em;
        margin-top: 5px;
    }

    .alert {
        color: red;
        font-size: 1em;
        margin-top: 10px;
    }
</style>

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

    <!-- <section class="page-header page-header-secnd" style="background-image: url({{ custom_asset('front_assets/img/computing_blogs_ing.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <span>Contact Us</span>
                <h1>Find the Perfect Solution for Your Business </h1>
                <p>Lift your business to new heights with our digital marketing services.<br> The magic of marketing, the
                    science of sales.</p>
            </div>
        </div>
    </section> -->


    <section class="contact-section bd-bottom padding">
        <div class="map-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-details-wrap">
                        <div class="section-heading mb-30">
                            <h4 class="sub-heading">Get In Touch</h4>
                            <h2>Have Any Questions?</h2>
                            <p>I have world-class, flexible support via live chat, email and phone. I guarantee that you’ll
                                be able to have any issue resolved within 24 hours.</p>
                        </div>
                        <ul class="contact-details">
                            <li><i class="las la-map-marked-alt"></i>Digi Rush Solutions LLP<br>C-177(A) Ind Area Uttam
                                Towers, 6th Floor,<br> Phase 8-B, Mohali (PB), India. </li>
                            <li><i class="las la-map-marked-alt"></i>Digi Rush Solutions LTD <br>20-22, Wenlock Road,
                                London, United Kingdom, N1 7GU </li>
                            <a href="mailto:contact@digirushsolutions.com">
                                <li><i class="las la-envelope-open"></i>Email:<br>contact@digirushsolutions.com</li>
                            </a>
                            <a href="tel:+91 99159 54999">
                                <li><i class="las la-phone-volume"></i>India<br>+91 99159 54999 </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="{{ route('contactform.submit') }}" method="post" class="form-horizontal" id="contactForm">
                            @csrf
                            <div class="section-heading mb-30">
                                <h4 class="sub-heading">Contact With Us</h4>
                                <h2>Contact Form</h2>
                            </div>
                            <div class="contact-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-field">
                                            <input type="text" id="firstname" name="firstname" class="form-control"
                                                placeholder="First Name" value="{{ old('firstname') }}">
                                            @error('firstname')
                                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-field">
                                            <input type="text" id="lastname" name="lastname" class="form-control"
                                                placeholder="Last Name" value="{{ old('lastname') }}">
                                            @error('lastname')
                                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-field input-group-prepend input_preport">
                                            <div class="input-group-prepend">
                                                <select name="countryCode" style="width:120px;">
                                                    <option data-countryCode="IN" value="91" {{ old('countryCode') == '91' ? 'selected' : '' }}>Ind (+91)</option>
                                                    <option data-countryCode="UK" value="44" {{ old('countryCode') == '44' ? 'selected' : '' }}>UK (+44)</option>
                                                    <option data-countryCode="US" value="1" {{ old('countryCode') == '1' ? 'selected' : '' }}>US (+1)</option>
                                                </select>
                                            </div>
                                            <input type="text" id="phone_fulls" name="mobile_number" minlength="10"
                                                maxlength="10" class="form-control" value="{{ old('mobile_number') }}">
                                        </div>
                                        @error('mobile_number')
                                            <div class="error-message" style="color:red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                        
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-field">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Email" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-field">
                                            <select name="services" id="cars">
                                                <option value="">Select a service</option>
                                                <option value="Website Designing" {{ old('services') == 'Website Designing' ? 'selected' : '' }}>
                                                    Website Designing & Development
                                                </option>
                                                <option value="Application Development" {{ old('services') == 'Application Development' ? 'selected' : '' }}>
                                                    Application Development
                                                </option>
                                                <option value="Software Development" {{ old('services') == 'Software Development' ? 'selected' : '' }}>
                                                    Software Development
                                                </option>
                                                <option value="CRM" {{ old('services') == 'CRM' ? 'selected' : '' }}>
                                                    CRM, ERP Development
                                                </option>
                                                <option value="All Digital Marketing Services" {{ old('services') == 'All Digital Marketing Services' ? 'selected' : '' }}>
                                                    All Digital Marketing Services
                                                </option>
                                                <option value="SEO Services" {{ old('services') == 'SEO Services' ? 'selected' : '' }}>
                                                    SEO Services
                                                </option>
                                                <option value="SMO Services" {{ old('services') == 'SMO Services' ? 'selected' : '' }}>
                                                    SMO Services
                                                </option>
                                                <option value="PPC Services" {{ old('services') == 'PPC Services' ? 'selected' : '' }}>
                                                    PPC Services
                                                </option>
                                                <option value="Email Marketing" {{ old('services') == 'Email Marketing' ? 'selected' : '' }}>
                                                    Email Marketing, SMS, Whatsapp Messages, Broadcast Services
                                                </option>
                                                <option value="Graphic Designing" {{ old('services') == 'Graphic Designing' ? 'selected' : '' }}>
                                                    Graphic Designing, Video Editing
                                                </option>
                                            </select>
                                            @error('services')
                                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-field">
                                            <input type="text" id="text" name="city" class="form-control"
                                                placeholder="City" value="{{ old('city') }}">
                                            @error('city')
                                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                        
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="form-field submit-btn">
                                            <button id="submit" class="default-btn" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>             
                    </div>
                </div>
            </div>
    </section>

    <div id="searchbox-overlay"></div>

    <div class="map-wrapper pt-90">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6859.944289020427!2d76.708462658844!3d30.71918348473811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4028918ae34084cf%3A0x71348db7307cc64e!2sDigi%20Rush%20Solutions!5e0!3m2!1sen!2sus!4v1718789548219!5m2!1sen!2sus"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- /#google-map -->

    

@endsection

