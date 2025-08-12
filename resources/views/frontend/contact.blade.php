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
                            <a href="mailto:support@digirushsolutions.com">
                                <li><i class="las la-envelope-open"></i>Email:<br>support@digirushsolutions.com</li>
                            </a>
                            <a href="tel:+91 99159 54999">
                                <li><i class="las la-phone-volume"></i>India<br>+91 99159 54999 </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="{{ route('contactform.submit') }}" method="post" class="form-horizontal"
                            id="contactFormss">
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
                                                    <option data-countryCode="US" value="1" {{ old('countryCode') == '1' ? 'selected' : '' }}>
                                                        US (+1)</option>
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
                                            <input type="text" id="text" name="city" class="form-control" placeholder="City"
                                                value="{{ old('city') }}">
                                            @error('city')
                                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div id="otp-group5" class="form-field" style="display: none;">
                                            <label for="otp">Enter OTP</label>
                                            <input type="text" name="otp" class="form-control" id="otp">
                                        </div>
                                    </div>
                                    <!-- <div id="contactForm-message" style="margin-top: 10px;"></div> -->
                                    <button type="submit" class="default-btn" id="submitBtnss">Submit</button>

                                    <button type="button" id="verifyOtpBtnss" class="default-btn"
                                        style="display: none;">Verify OTP</button>

                                    <!-- <button id="submitBtn" class="default-btn" type="submit">Send Message</button> -->
                                </div>
                            </div>
                        </form>
                        <div id="messageBoxs"></div>
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



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('contactFormss');
            const submitBtn = document.getElementById('submitBtnss');
            const verifyOtpBtn = document.getElementById('verifyOtpBtnss');
            const otpGroup = document.getElementById('otp-group5');
            const messageBox = document.getElementById('messageBoxs');
            const countryCodeField = document.querySelector('select[name="countryCode"]');
            const mobileField = document.querySelector('input[name="mobile_number"]');
            let otpSent = false;
            let phoneVerified = false;
            let lastVerifiedNumber = '';
            let isVerifying = false;
            function showMessage(message, success = true) {
                messageBox.innerText = message;
                messageBox.style.color = success ? 'green' : 'red';
            }
            function getCurrentPhoneNumber() {
                const code = countryCodeField.value.trim();
                const mobile = mobileField.value.trim();
                return `+${code}${mobile}`;
            }
            function shouldVerifyPhone() {
                const currentNumber = getCurrentPhoneNumber();
                const code = countryCodeField.value.trim();
                const mobile = mobileField.value.trim();
                if (mobile.length < 6 || code.length === 0) {
                    return false;
                }
                if (isVerifying) {
                    return false;
                }
                if (phoneVerified && currentNumber === lastVerifiedNumber) {
                    return false;
                }
                return true;
            }
            async function verifyPhoneNumber(code, mobile) {
                if (!shouldVerifyPhone()) {
                    return;
                }
                const fullNumber = `+${code}${mobile}`;
                isVerifying = true;
                try {
                    showMessage("Verifying phone number...", true);
                    const url = `http://apilayer.net/api/validate?access_key=376d42f16158f1ca5bb00609ac57132d&number=${encodeURIComponent(fullNumber)}&format=1`;
                    const res = await fetch(url);
                    const data = await res.json();
                    if (data.valid) {
                        phoneVerified = true;
                        lastVerifiedNumber = fullNumber;
                        showMessage("✅ Phone number verified.", true);
                        setTimeout(() => {
                            if (messageBox.innerText.includes("verified")) {
                                messageBox.innerText = '';
                            }
                        }, 3000);
                    } else {
                        phoneVerified = false;
                        lastVerifiedNumber = '';
                        showMessage("❌ Invalid phone number.", false);
                    }
                } catch (err) {
                    console.error('Phone verification error:', err);
                    phoneVerified = false;
                    lastVerifiedNumber = '';
                    showMessage("⚠️ Failed to verify number. Please try again.", false);
                } finally {
                    isVerifying = false;
                }
            }
            function handlePhoneChange() {
                const currentNumber = getCurrentPhoneNumber();
                if (phoneVerified && currentNumber !== lastVerifiedNumber) {
                    phoneVerified = false;
                    lastVerifiedNumber = '';
                    showMessage("Phone number changed. Please verify again.", false);
                }
                if (shouldVerifyPhone()) {
                    const code = countryCodeField.value.trim();
                    const mobile = mobileField.value.trim();
                    verifyPhoneNumber(code, mobile);
                }
            }
            mobileField.addEventListener('blur', handlePhoneChange);
            mobileField.addEventListener('input', function () {
                const currentNumber = getCurrentPhoneNumber();
                if (phoneVerified && currentNumber !== lastVerifiedNumber) {
                    phoneVerified = false;
                    if (messageBox.innerText.includes("verified")) {
                        messageBox.innerText = '';
                    }
                }
            });
            countryCodeField.addEventListener('change', function () {
                if (phoneVerified) {
                    phoneVerified = false;
                    lastVerifiedNumber = '';
                    showMessage("Country code changed. Please verify phone number again.", false);
                }
                const mobile = mobileField.value.trim();
                if (mobile.length >= 6) {
                    setTimeout(handlePhoneChange, 100);
                }
            });
            verifyOtpBtn.addEventListener('click', function () {
                const formData = new FormData(form);
                verifyOtpBtn.innerText = "Verifying...";
                verifyOtpBtn.disabled = true;
                fetch("{{ route('contactform.submit') }}", {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        verifyOtpBtn.innerText = "Verify OTP";
                        verifyOtpBtn.disabled = false;

                        if (data.success && (data.step === 'form_saved' || data.action === 'form_saved')) {
                            showMessage("✅ Form submitted successfully.");
                            verifyOtpBtn.style.display = 'none';
                            setTimeout(() => location.reload(), 2000);
                        } else {
                            showMessage(data.message || "❌ OTP verification failed", false);
                        }
                    })
                    .catch(() => {
                        verifyOtpBtn.innerText = "Verify OTP";
                        verifyOtpBtn.disabled = false;
                        showMessage("⚠️ Something went wrong.", false);
                    });
            });
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                if (otpSent) return;
                if (!phoneVerified) {
                    showMessage("❌ Please verify your phone number before submitting.", false);
                    mobileField.focus();
                    return;
                }
                const currentNumber = getCurrentPhoneNumber();
                if (currentNumber !== lastVerifiedNumber) {
                    phoneVerified = false;
                    showMessage("❌ Phone number was changed. Please verify again.", false);
                    return;
                }
                submitBtn.innerText = "Processing...";
                submitBtn.disabled = true;
                const formData = new FormData(form);
                fetch("{{ route('contactform.submit') }}", {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        submitBtn.innerText = "Submit";
                        submitBtn.disabled = false;
                        if (data.success && data.step === 'otp_sent') {
                            otpSent = true;
                            otpGroup.style.display = 'block';
                            document.getElementById('otp').setAttribute('required', 'required');
                            submitBtn.style.display = 'none';
                            verifyOtpBtn.style.display = 'inline-block';
                            showMessage("📧 OTP sent. Please check your email.", true);
                        }
                        else if (data.success && (data.step === 'form_submitted' || data.action === 'form_saved')) {
                            showMessage("✅ Form submitted successfully!", true);
                            form.reset();
                            otpGroup.style.display = 'none';
                            submitBtn.style.display = 'inline-block';
                            verifyOtpBtn.style.display = 'none';
                            phoneVerified = false;
                            lastVerifiedNumber = '';
                            otpSent = false;
                            setTimeout(() => location.reload(), 2000);
                        }
                        else {
                            showMessage(data.message || "⚠️ Something went wrong.", false);
                        }
                    })
                    .catch(() => {
                        submitBtn.innerText = "Submit";
                        submitBtn.disabled = false;
                        showMessage("⚠️ Something went wrong", false);
                    });
            });
            function updatePhoneFieldStatus() {
                if (phoneVerified && getCurrentPhoneNumber() === lastVerifiedNumber) {
                    mobileField.style.borderColor = '#28a745';
                    mobileField.style.backgroundColor = '#f8fff9';
                } else {
                    mobileField.style.borderColor = '';
                    mobileField.style.backgroundColor = '';
                }
            }
            const originalShowMessage = showMessage;
            showMessage = function (message, success) {
                originalShowMessage(message, success);
                setTimeout(updatePhoneFieldStatus, 100);
            };
        });
    </script>

@endsection