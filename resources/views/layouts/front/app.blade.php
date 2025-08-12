<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $data->meta_title ?? $metatitle ?? 'Digi Rush Solutions | A Complete Web Solutions Agency in India' }}
    </title>
    <meta name="description"
        content="{!! trim(html_entity_decode(strip_tags($data->meta_description ?? $metaDescription ?? 'Digi Rush Solutions offers expert digital marketing, web design, and development services for online success with customized solutions.'))) !!}">
    <meta name="keywords" content="{{ $data->meta_keyword ?? $metaKeywords ?? 'default' }}">

    <meta name="author" content="Digi Rush Solutions">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="JgGUf8Zekt05bkRfz8v8KfEGcQjGR67efwDu_JuA6Js" />

    {{-- Open Graph --}}
    <meta property="og:title"
        content="{{ $metatitle ?? 'Digi Rush Solutions | A Complete Web Solutions Agency in India' }}">
    <meta property="og:description"
        content="{{ $metaDescription ?? 'Digi Rush Solutions offers expert digital marketing, web design, and development services for online success with customized solutions.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('public/front_assets/img/F-Logo.png') }}">
    <meta property="og:url" content="@yield('og_url', request()->url())">
    <meta property="og:type" content="website">

    {{-- Canonical & Favicon --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="shortcut icon" href="{{ asset('public/front_assets/img/DigiRush_Solution.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- External Fonts & Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('public/front_assets/customize.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front_assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front_assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front_assets/css/redias-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front_assets/css/odometer.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('public/front_assets/css/venobox.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('public/front_assets/css/keyframe-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front_assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front_assets/css/main.css') }}">
    @yield('stylesheets')

    {{-- Google Analytics (exclude specific pages) --}}
    @if (!in_array(Request::url(), [route('home.landing'), route('seo-digitalservices')]))
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XBHGHYYWWZ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'G-XBHGHYYWWZ');
        </script>
    @endif

    {{-- SEO extras --}}
    @yield('meta_robots')
    @yield('heads')
    @yield('headTag')

    {{-- Schema.org --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Digi Rush Solutions",
        "url": "https://digirushsolutions.com/",
        "logo": "https://digirushsolutions.com/public/front_assets/img/F-Logo.png",
        "alternateName": "Digi Rush Solutions",
        "sameAs": [
            "https://www.facebook.com/DigiRushSolutionLLP",
            "https://in.linkedin.com/company/digirushsolutions",
            "https://x.com/Digirush_",
            "https://www.instagram.com/digirushsolutions/",
            "https://www.youtube.com/@digirushsolutions"
        ],
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "+91 99159 54999",
                "contactType": "technical support",
                "email": "mailto:support@digirushsolutions.com",
                "areaServed": "IN",
                "availableLanguage": "en"
            },
            {
                "@type": "ContactPoint",
                "telephone": "+1 202 539 0556",
                "contactType": "technical support",
                "email": "mailto:support@digirushsolutions.com",
                "areaServed": "US",
                "availableLanguage": "en"
            },
            {
                "@type": "ContactPoint",
                "telephone": "+44 1865 60 0823",
                "contactType": "",
                "email": "mailto:support@digirushsolutions.com",
                "areaServed": "GB",
                "availableLanguage": "en"
            }
        ]
    }
    </script>

    {{-- ClickCease --}}
    <script>
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        script.src = 'https://www.clickcease.com/monitor/stat.js';
        document.head.appendChild(script);
    </script>
    <noscript>
        <a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com'
                alt='ClickCease' /></a>
    </noscript>
</head>

<body class="header-2">

    @if (Request::url() != route('home.landing') && Request::url() != route('seo-digitalservices'))
        @include('layouts.front.header')
    @endif

    @yield('content')

    @if (Request::url() != route('home.landing') && Request::url() != route('seo-digitalservices'))
        @include('layouts.front.footer')
    @endif

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('public/front_assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    <script src="{{asset('public/front_assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/front_assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('public/front_assets/js/vendor/odometer.min.js')}}"></script>
    <script src="{{asset('public/front_assets/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('public/front_assets/js/vendor/venobox.min.js')}}"></script>
    <script src="{{asset('public/front_assets/js/vendor/swiper.min.js')}}"></script>
    <script src="{{asset('public/front_assets/js/vendor/smooth-scroll.js')}}"></script>

    <script src="{{asset('public/front_assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('public/front_assets/js/quote.js')}}"></script>
    <script src="{{asset('public/front_assets/js/main.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')

    <script>
        $(document).ready(function () {

            $('#home_cara_main').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            @if(session('success'))
                toastr.success("{{ session('success') }}");
            @endif
    
        });
    </script>
    <script>
        $(document).ready(function () {
            function close_accordion_section() {
                $('.accordion .accordion-section-title').removeClass('active');
                $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
            }

            $('.accordion-section-title').click(function (e) {
                var currentAttrValue = $(this).attr('href');

                if ($(e.target).is('.active')) {
                    close_accordion_section();
                } else {
                    close_accordion_section();
                    $(this).addClass('active');
                    $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
                }

                e.preventDefault();
            });
        });
    </script>

    <script>
        $('#flex_main_hire').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });
    </script>

    <script>
        $('.flex_main_hires').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const submitBtn = document.querySelector('button[type="submit"]');
            const form = document.getElementById('bannerForm');
            if (!form) return;
            const modal = document.getElementById('SearchModal');
            if (!submitBtn) return;
            submitBtn.disabled = false;

            form.addEventListener('input', function () {
                validateForm();
            });

            function validateForm() {
                let isValid = true;

                const fname = document.getElementById('fname');
                if (!/^[A-Za-z]+$/.test(fname.value)) {
                    showError(fname, 'First name must contain only alphabets.');
                    isValid = false;
                } else {
                    clearError(fname);
                }

                const lname = document.getElementById('lname');
                if (!lname.value || /[^A-Za-z]/.test(lname.value)) {
                    showError(lname, 'Last name must contain only alphabets.');
                    isValid = false;
                } else {
                    clearError(lname);
                }

                const phone = document.getElementById('phone_no');
                if (!/^\d{10}$/.test(phone.value)) {
                    showError(phone, 'Phone number must be exactly 10 digits.');
                    isValid = false;
                } else {
                    clearError(phone);
                }

                const email = document.getElementById('email');
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                    showError(email, 'Please enter a valid email address.');
                    isValid = false;
                } else {
                    clearError(email);
                }

                const city = document.getElementById('city');
                if (!city.value || !/^[A-Za-z0-9 ]+$/.test(city.value)) {
                    showError(city, 'City name can contain only alphabets, numbers, and spaces.');
                    isValid = false;
                } else {
                    clearError(city);
                }

                submitBtn.disabled = !isValid;
            }

            function showError(input, message) {
                const errorDiv = input.nextElementSibling;
                errorDiv.textContent = message;
                input.classList.add('is-invalid');
            }

            function clearError(input) {
                const errorDiv = input.nextElementSibling;
                errorDiv.textContent = '';
                input.classList.remove('is-invalid');
            }

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                if (!submitBtn.disabled) {
                    alert('Form submitted successfully!');
                    form.reset();
                    resetForm();

                    $('#SearchModal').modal('hide');
                }
            });

            $('#SearchModal').on('hidden.bs.modal', function () {
                resetForm();
            });

            function resetForm() {
                form.reset();
                document.querySelectorAll('.text-danger').forEach(el => el.textContent = '');
                document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                submitBtn.disabled = true;
            }


            const modalCloseButton = document.querySelector('.btn-close');
            if (modalCloseButton) {
                modalCloseButton.addEventListener('click', function () {
                    resetForm();  // Reset form when modal close button is clicked
                    $('#SearchModal').modal('hide');  // Close the modal
                });
            }
        });
    </script>

    <script>
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    const parent = this.closest('.dropdown');
                    parent.classList.toggle('open');

                    const icon = this.querySelector('.toggle-icon');
                    icon.textContent = parent.classList.contains('open') ? '−' : '+';
                }
            });
        });
    </script>

    <SCript>
        document.querySelectorAll('.testi-author').forEach(el => {
            const name = el.querySelector('span')?.innerText || '';
            const initialDiv = el.querySelector('.author-initial');
            if (initialDiv && name.length > 0) {
                initialDiv.textContent = name.trim().charAt(0).toUpperCase();
            }
        });
    </SCript>


    <!-- feedback users -->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const yesBtn = document.getElementById("yesBtn");
            const noBtn = document.getElementById("noBtn");
            const yesResponse = document.getElementById("yesResponse");
            const noResponse = document.getElementById("noResponse");
            const buttonGroup = document.getElementById("buttonGroup");

            yesBtn.addEventListener("click", function () {
                yesResponse.style.display = "block";
                noResponse.style.display = "none";
                buttonGroup.style.display = "none"; // 🔴 Hide buttons
            });

            noBtn.addEventListener("click", function () {
                noResponse.style.display = "block";
                yesResponse.style.display = "none";
                buttonGroup.style.display = "none"; // 🔴 Hide buttons
            });
        });
    </script> -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const yesBtn = document.getElementById("yesBtn");
            const noBtn = document.getElementById("noBtn");
            const yesResponse = document.getElementById("yesResponse");
            const noResponse = document.getElementById("noResponse");
            const buttonGroup = document.getElementById("buttonGroup");

            if (yesBtn && noBtn && yesResponse && noResponse && buttonGroup) {
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
            }
        });
    </script>


    <!-- /*------------------------------fixed button-left-----------------------*/ -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const contactBtn = document.getElementById('contactBtn');
            const contactForm = document.getElementById('contactForm');
            const closeForm = document.getElementById('closeForm');

            // Toggle form on contact button click
            contactBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                contactForm.style.display = contactForm.style.display === 'none' ? 'block' : 'none';
            });

            // Close form on close button click
            closeForm.addEventListener('click', function () {
                contactForm.style.display = 'none';
            });

            // Close the form when clicking outside
            document.addEventListener('click', function (event) {
                if (!contactForm.contains(event.target) && event.target !== contactBtn) {
                    contactForm.style.display = 'none';
                }
            });

            // Prevent form from closing when clicking inside it
            contactForm.addEventListener('click', function (e) {
                e.stopPropagation();
            });
        });
    </script>


    <script>
        // document.getElementById('myForm').addEventListener('submit', async function (e) {
        //     e.preventDefault();
        document.addEventListener("DOMContentLoaded", function () {
            const myForm = document.getElementById('myForm');
            if (!myForm) return; // stop if not found

            myForm.addEventListener('submit', async function (e) {
                e.preventDefault();
                const form = e.target;
                const formData = new FormData(form);
                const otpField = document.getElementById('otp-group');
                const otpValue = formData.get('otp');
                const message = document.getElementById('message');
                try {
                    const response = await fetch("{{ route('submit_home_form') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('input[name=_token]').value,
                            "Accept": "application/json"
                        },
                        body: formData
                    });
                    const data = await response.json();
                    message.style.color = data.success ? 'green' : 'red';
                    message.innerText = data.message;
                    if (data.success && data.refresh) {
                        window.location.reload();
                    } else if (data.success && (!otpValue || otpValue.trim() === "")) {
                        otpField.style.display = 'block';
                    }
                } catch (err) {
                    message.style.color = 'red';
                    message.innerText = "Something went wrong. Please try again.";
                }
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myform1');
            const otpFieldGroup = document.getElementById('otp-group');
            const otpInput = otpFieldGroup?.querySelector('input[name="otp"]');
            const submitBtn = form?.querySelector('button[type="submit"]');
            const message = document.getElementById('message');
            const countryCodeField = document.querySelector('select[name="countryCode"]');
            const mobileField = document.querySelector('input[name="number"]');
            let phoneVerified = false;
            let lastVerifiedNumber = '';
            let isVerifying = false;
            function showMessage(text, success = true) {
                if (message) {
                    message.innerText = text;
                    message.style.color = success ? 'green' : 'red';
                }
            }
            function getCurrentPhoneNumber() {
                const code = countryCodeField?.value?.trim() || '';
                const mobile = mobileField?.value?.trim() || '';
                return code && mobile ? `+${code}${mobile}` : '';
            }
            function shouldVerifyPhone() {
                const currentNumber = getCurrentPhoneNumber();
                const code = countryCodeField?.value?.trim() || '';
                const mobile = mobileField?.value?.trim() || '';
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
            async function verifyPhoneNumber() {
                if (!shouldVerifyPhone()) {
                    return;
                }
                const code = countryCodeField?.value?.trim();
                const mobile = mobileField?.value?.trim();
                if (!code || !mobile || mobile.length < 6) return;
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
                        showMessage("✅ Phone number verified!", true);
                        updatePhoneFieldStatus();
                        setTimeout(() => {
                            if (message?.innerText?.includes("verified")) {
                                message.innerText = '';
                            }
                        }, 3000);
                    } else {
                        phoneVerified = false;
                        lastVerifiedNumber = '';
                        showMessage("❌ Invalid phone number", false);
                        updatePhoneFieldStatus();
                    }
                } catch (err) {
                    console.error('Phone verification error:', err);
                    phoneVerified = false;
                    lastVerifiedNumber = '';
                    showMessage("⚠️ Phone verification failed. Please try again.", false);
                    updatePhoneFieldStatus();
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
                    updatePhoneFieldStatus();
                }
                if (shouldVerifyPhone()) {
                    verifyPhoneNumber();
                }
            }
            function updatePhoneFieldStatus() {
                if (mobileField) {
                    if (phoneVerified && getCurrentPhoneNumber() === lastVerifiedNumber) {
                        mobileField.style.borderColor = '#28a745';
                        mobileField.style.backgroundColor = '#f8fff9';
                    } else {
                        mobileField.style.borderColor = '';
                        mobileField.style.backgroundColor = '';
                    }
                }
            }
            if (mobileField) {
                mobileField.addEventListener('blur', handlePhoneChange);
                mobileField.addEventListener('input', function () {
                    const currentNumber = getCurrentPhoneNumber();
                    if (phoneVerified && currentNumber !== lastVerifiedNumber) {
                        phoneVerified = false;
                        updatePhoneFieldStatus();
                        if (message?.innerText?.includes("verified")) {
                            message.innerText = '';
                        }
                    }
                });
            }
            if (countryCodeField) {
                countryCodeField.addEventListener('change', function () {
                    if (phoneVerified) {
                        phoneVerified = false;
                        lastVerifiedNumber = '';
                        showMessage("Country code changed. Please verify phone number again.", false);
                        updatePhoneFieldStatus();
                    }
                    const mobile = mobileField?.value?.trim() || '';
                    if (mobile.length >= 6) {
                        setTimeout(handlePhoneChange, 100);
                    }
                });
            }
            if (form) {
                form.addEventListener('submit', async function (e) {
                    e.preventDefault();

                    // Check if phone is verified before submitting
                    if (!phoneVerified) {
                        showMessage("❌ Please verify your phone number before submitting.", false);
                        if (mobileField) mobileField.focus();
                        return;
                    }

                    // Double-check that the current number matches the verified number
                    const currentNumber = getCurrentPhoneNumber();
                    if (currentNumber !== lastVerifiedNumber) {
                        phoneVerified = false;
                        showMessage("❌ Phone number was changed. Please verify again.", false);
                        updatePhoneFieldStatus();
                        return;
                    }

                    const formData = new FormData(form);
                    const originalBtnText = submitBtn?.innerHTML || 'Submit';

                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
                    }

                    try {
                        const csrfToken = document.querySelector('input[name="_token"]');
                        const response = await fetch(form.action, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": csrfToken?.value || '',
                                "Accept": "application/json"
                            },
                            body: formData
                        });

                        const data = await response.json();
                        showMessage(data.message, data.success);

                        if (data.success) {
                            if (data.refresh) {
                                showMessage("✅ Form submitted successfully! Redirecting...", true);
                                setTimeout(() => {
                                    message.innerText = "🎉 Thank you! Form submitted successfully.";
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }, 1000);
                            } else if (!formData.get('otp')) {
                                // First step - show OTP field
                                if (otpFieldGroup && otpInput) {
                                    otpFieldGroup.style.display = 'block';
                                    otpInput.disabled = false;
                                    otpInput.focus();
                                }
                                if (submitBtn) {
                                    submitBtn.innerHTML = 'Verify OTP';
                                }
                                showMessage("📧 OTP sent to your email. Please check and enter below.", true);
                            }
                        } else {
                            // If phone verification failed on server side, reset local status
                            if (data.message?.toLowerCase().includes('phone')) {
                                phoneVerified = false;
                                lastVerifiedNumber = '';
                                updatePhoneFieldStatus();
                            }
                        }
                    } catch (err) {
                        console.error('Form submission error:', err);
                        showMessage("⚠️ Something went wrong. Please try again.", false);
                    } finally {
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = formData.get('otp') ? originalBtnText : 'Verify OTP';
                        }
                    }
                });
            }

            // Add some helpful utility functions
            window.resetPhoneVerification = function () {
                phoneVerified = false;
                lastVerifiedNumber = '';
                updatePhoneFieldStatus();
                if (message) message.innerText = '';
            };

            window.getPhoneVerificationStatus = function () {
                return {
                    verified: phoneVerified,
                    lastVerifiedNumber: lastVerifiedNumber,
                    currentNumber: getCurrentPhoneNumber(),
                    isVerifying: isVerifying
                };
            };
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myform2');
            const otpGroup = document.getElementById('otp-group2');
            const otpInput = otpGroup?.querySelector('input[name="otp"]');
            const submitBtn = form?.querySelector('button[type="submit"]');
            const messageBox = document.getElementById('messageForm2');
            const originalBtnText = submitBtn?.innerHTML || 'Submit';
            const countryCodeField = form?.querySelector('select[name="countryCode"]');
            const mobileField = form?.querySelector('input[name="number"]');
            let phoneVerified = false;
            let lastVerifiedNumber = '';
            let isVerifying = false;
            function showMessage(text, success = true) {
                if (messageBox) {
                    messageBox.innerText = text;
                    messageBox.style.color = success ? 'green' : 'red';
                }
            }
            function getCurrentPhoneNumber() {
                const code = countryCodeField?.value?.trim() || '';
                const mobile = mobileField?.value?.trim() || '';
                return code && mobile ? `+${code}${mobile}` : '';
            }
            function shouldVerifyPhone() {
                const currentNumber = getCurrentPhoneNumber();
                const code = countryCodeField?.value?.trim() || '';
                const mobile = mobileField?.value?.trim() || '';
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
                        showMessage("✅ Phone number verified!", true);
                        updatePhoneFieldStatus();


                        setTimeout(() => {
                            if (messageBox?.innerText?.includes("verified")) {
                                messageBox.innerText = '';
                            }
                        }, 3000);
                    } else {
                        phoneVerified = false;
                        lastVerifiedNumber = '';
                        showMessage("❌ Invalid phone number.", false);
                        updatePhoneFieldStatus();
                    }
                } catch (err) {
                    console.error('Phone verification error:', err);
                    phoneVerified = false;
                    lastVerifiedNumber = '';
                    showMessage("⚠️ Failed to verify phone number. Please try again.", false);
                    updatePhoneFieldStatus();
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
                    updatePhoneFieldStatus();
                }


                if (shouldVerifyPhone()) {
                    const code = countryCodeField?.value?.trim();
                    const mobile = mobileField?.value?.trim();
                    if (code && mobile) {
                        verifyPhoneNumber(code, mobile);
                    }
                }
            }


            function updatePhoneFieldStatus() {
                if (mobileField) {
                    if (phoneVerified && getCurrentPhoneNumber() === lastVerifiedNumber) {
                        mobileField.style.borderColor = '#28a745';
                        mobileField.style.backgroundColor = '#f8fff9';
                    } else {
                        mobileField.style.borderColor = '';
                        mobileField.style.backgroundColor = '';
                    }
                }
            }


            function attachVerificationTriggers() {
                if (mobileField) {

                    mobileField.addEventListener('blur', handlePhoneChange);


                    mobileField.addEventListener('input', function () {

                        const currentNumber = getCurrentPhoneNumber();
                        if (phoneVerified && currentNumber !== lastVerifiedNumber) {
                            phoneVerified = false;
                            updatePhoneFieldStatus();
                            if (messageBox?.innerText?.includes("verified")) {
                                messageBox.innerText = '';
                            }
                        }
                    });



                }

                if (countryCodeField) {
                    countryCodeField.addEventListener('change', function () {

                        if (phoneVerified) {
                            phoneVerified = false;
                            lastVerifiedNumber = '';
                            showMessage("Country code changed. Please verify phone number again.", false);
                            updatePhoneFieldStatus();
                        }


                        const mobile = mobileField?.value?.trim() || '';
                        if (mobile.length >= 6) {
                            setTimeout(handlePhoneChange, 100);
                        }
                    });
                }
            }

            attachVerificationTriggers();

            if (form) {
                form.addEventListener('submit', async function (e) {
                    e.preventDefault();


                    if (!phoneVerified) {
                        showMessage("❌ Please verify your phone number before submitting.", false);
                        if (mobileField) mobileField.focus();
                        return;
                    }


                    const currentNumber = getCurrentPhoneNumber();
                    if (currentNumber !== lastVerifiedNumber) {
                        phoneVerified = false;
                        showMessage("❌ Phone number was changed. Please verify again.", false);
                        updatePhoneFieldStatus();
                        return;
                    }

                    let wasOtpDisabled = otpInput?.disabled || false;
                    if (wasOtpDisabled && otpInput) otpInput.disabled = false;

                    const formData = new FormData(form);
                    if (wasOtpDisabled && otpInput) otpInput.disabled = true;

                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
                    }

                    form.querySelectorAll('.error-message').forEach(el => el.remove());
                    if (messageBox) messageBox.innerText = '';

                    try {
                        const csrfToken = document.querySelector('input[name="_token"]');
                        const response = await fetch(form.action, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": csrfToken?.value || '',
                                "Accept": "application/json"
                            },
                            body: formData
                        });

                        const data = await response.json();

                        if (response.ok && data.success) {
                            showMessage(data.message, true);

                            if (!formData.get('otp')) {
                                // First step - show OTP field
                                if (otpGroup && otpInput) {
                                    otpGroup.style.display = 'block';
                                    otpInput.disabled = false;
                                    otpInput.focus();
                                }
                                if (submitBtn) {
                                    submitBtn.innerHTML = 'Verify OTP';
                                }
                                showMessage("📧 OTP sent to your email. Please check and enter below.", true);
                            } else {
                                // OTP verified - success
                                showMessage("✅ Thank you! Form submitted successfully", true);
                                setTimeout(() => {
                                    message.innerText = "🎉 Thank you! Form submitted successfully.";
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 3000);
                                }, 1000);

                            }
                        } else if (response.status === 422 && data.errors) {
                            // Handle validation errors
                            for (let field in data.errors) {
                                const input = form.querySelector(`[name="${field}"]`);
                                if (input && input.parentNode) {
                                    const errorDiv = document.createElement('div');
                                    errorDiv.classList.add('error-message');
                                    errorDiv.style.color = 'red';
                                    errorDiv.innerText = data.errors[field][0];
                                    input.parentNode.appendChild(errorDiv);
                                }
                            }
                            showMessage(data.message || 'Validation failed.', false);

                            // If phone validation failed on server side, reset local status
                            if (data.message?.toLowerCase().includes('phone')) {
                                phoneVerified = false;
                                lastVerifiedNumber = '';
                                updatePhoneFieldStatus();
                            }
                        } else {
                            showMessage(data.message || '⚠️ Something went wrong.', false);

                            // If phone validation failed on server side, reset local status
                            if (data.message?.toLowerCase().includes('phone')) {
                                phoneVerified = false;
                                lastVerifiedNumber = '';
                                updatePhoneFieldStatus();
                            }
                        }
                    } catch (err) {
                        console.error('Form submission error:', err);
                        showMessage('⚠️ Something went wrong. Please try again.', false);
                    } finally {
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = formData.get('otp') ? originalBtnText : 'Verify OTP';
                        }
                    }
                });
            }

            // Add some helpful utility functions for debugging
            window.resetPhoneVerificationForm2 = function () {
                phoneVerified = false;
                lastVerifiedNumber = '';
                updatePhoneFieldStatus();
                if (messageBox) messageBox.innerText = '';
            };

            window.getPhoneVerificationStatusForm2 = function () {
                return {
                    verified: phoneVerified,
                    lastVerifiedNumber: lastVerifiedNumber,
                    currentNumber: getCurrentPhoneNumber(),
                    isVerifying: isVerifying
                };
            };
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myform3');
            const countryCodeField = form.querySelector('select[name="countryCode"]');
            const mobileField = form.querySelector('input[name="phone"]');
            const emailField = form.querySelector('input[name="email"]');
            const otpFieldGroup = document.getElementById('otp-group1');
            const otpInput = otpFieldGroup.querySelector('input[name="otp"]');
            const message = document.getElementById('message44');
            const numberValidationMessage = document.getElementById('numberValidationMessage');
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            let otpSent = false;
            function clearErrors() {
                form.querySelectorAll('.text-danger').forEach(el => el.remove());
            }
            function showFieldError(input, message) {
                const error = document.createElement('div');
                error.className = 'text-danger mt-1';
                error.textContent = message;
                input.parentNode.appendChild(error);
            }
            async function verifyPhoneNumber() {
                const code = countryCodeField.value.trim();
                const mobile = mobileField.value.trim();
                const fullNumber = `+${code}${mobile}`;
                numberValidationMessage.innerText = "";
                if (!code || !mobile || mobile.length < 6) {
                    numberValidationMessage.innerText = "❌ Enter a valid phone number.";
                    numberValidationMessage.style.color = "red";
                    return false;
                }
                try {
                    submitBtn.disabled = true;
                    numberValidationMessage.innerText = "⏳ Verifying number...";
                    numberValidationMessage.style.color = "blue";
                    const url = `https://apilayer.net/api/validate?access_key=376d42f16158f1ca5bb00609ac57132d&number=${encodeURIComponent(fullNumber)}&format=1`;
                    const res = await fetch(url);
                    const data = await res.json();
                    if (data.valid) {
                        numberValidationMessage.innerText = "✅ Phone number is valid.";
                        numberValidationMessage.style.color = "green";
                        return true;
                    } else {
                        numberValidationMessage.innerText = "❌ Invalid phone number.";
                        numberValidationMessage.style.color = "red";
                        return false;
                    }
                } catch (err) {
                    numberValidationMessage.innerText = "❌ Could not verify number.";
                    numberValidationMessage.style.color = "red";
                    return false;
                } finally {
                    submitBtn.disabled = false;
                }
            }
            form.addEventListener('submit', async function (e) {
                e.preventDefault();
                clearErrors();
                message.innerText = "";
                numberValidationMessage.innerText = "";
                const formData = new FormData(form);
                const otpValue = otpInput.value.trim();
                if (!otpSent) {
                    const phoneValid = await verifyPhoneNumber();
                    const email = emailField.value.trim();
                    if (!phoneValid || !email) {
                        message.innerText = "❌ Valid phone and email required before sending OTP.";
                        message.style.color = "red";
                        return;
                    }
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Sending OTP...';
                    try {
                        const response = await fetch(form.action, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                                "Accept": "application/json"
                            },
                            body: formData
                        });
                        const data = await response.json();
                        if (response.ok && data.success) {
                            otpSent = true;
                            message.innerText = "✅ OTP sent to your email. Please enter it below.";
                            message.style.color = "green";
                            otpFieldGroup.style.display = 'block';
                            otpInput.removeAttribute('disabled');
                            otpInput.focus();
                            submitBtn.innerHTML = "Verify OTP";
                        } else if (response.status === 422) {
                            Object.entries(data.errors).forEach(([key, messages]) => {
                                const input = form.querySelector(`[name="${key}"]`);
                                if (input) showFieldError(input, messages[0]);
                            });
                            submitBtn.innerHTML = originalBtnText;
                        } else {
                            message.innerText = data.message || "❌ Failed to send OTP.";
                            message.style.color = "red";
                        }
                    } catch (err) {
                        message.innerText = "❌ Something went wrong while sending OTP.";
                        message.style.color = "red";
                    } finally {
                        submitBtn.disabled = false;
                    }
                } else {
                    if (!otpValue) {
                        message.innerText = "❌ Please enter the OTP.";
                        message.style.color = "red";
                        return;
                    }
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Verifying OTP...';
                    try {
                        const response = await fetch(form.action, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                                "Accept": "application/json"
                            },
                            body: formData
                        });
                        const data = await response.json();
                        if (response.ok && data.success) {
                            message.innerText = "✅ Form submitted successfully!";
                            message.style.color = "green";
                            form.reset();
                            otpFieldGroup.style.display = 'none';
                            otpInput.setAttribute('disabled', 'disabled');
                            otpInput.value = '';
                            otpSent = false;
                            submitBtn.innerHTML = originalBtnText;
                            setTimeout(() => {
                                message.innerText = '';
                                numberValidationMessage.innerText = '';
                            }, 5000);

                        } else if (response.status === 422) {
                            Object.entries(data.errors).forEach(([key, messages]) => {
                                const input = form.querySelector(`[name="${key}"]`);
                                if (input) showFieldError(input, messages[0]);
                            });
                        } else {
                            message.innerText = data.message || "❌ OTP verification failed.";
                            message.style.color = "red";
                        }
                    } catch (err) {
                        message.innerText = "❌ Something went wrong during verification.";
                        message.style.color = "red";
                    } finally {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('contact-form').addEventListener('submit', async function (e) {
                e.preventDefault();
                const form = e.target;
                const otpGroup = document.getElementById('otp-group4');
                const otpInput = otpGroup.querySelector('input[name="otp"]');
                const submitBtn = form.querySelector('button[type="submit"]');
                const message = document.getElementById('message');
                const originalBtnText = submitBtn.innerHTML;

                // Remove any existing success message
                const existingSuccessMsg = document.getElementById('dynamic-success-message');
                if (existingSuccessMsg) {
                    existingSuccessMsg.remove();
                }

                let wasOtpDisabled = otpInput.disabled;
                if (wasOtpDisabled) otpInput.disabled = false;
                const formData = new FormData(form);
                if (wasOtpDisabled) otpInput.disabled = true;

                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
                form.querySelectorAll('.error-message').forEach(el => el.remove());
                message.innerText = '';

                try {
                    const response = await fetch(form.action, {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                            "Accept": "application/json"
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok && data.success) {
                        if (!formData.get('otp')) {
                            // First submission - OTP request
                            message.style.color = 'green';
                            message.style.fontWeight = 'bold';
                            message.innerText = data.message || 'OTP sent successfully!';

                            otpGroup.style.display = 'block';
                            otpInput.disabled = false;
                            otpInput.focus();
                            submitBtn.innerHTML = 'Verify OTP';

                            setTimeout(() => {
                                message.innerText = '';
                                message.style.fontWeight = 'normal';
                            }, 5000);
                        } else {
                            // OTP verification successful - Final success

                            // Hide OTP group first
                            otpGroup.style.display = 'none';
                            otpInput.disabled = true;
                            otpInput.value = '';

                            // Create success message element dynamically right below submit button
                            const successMessage = document.createElement('div');
                            successMessage.id = 'dynamic-success-message';
                            successMessage.style.cssText = `
                        display: block;
                        color: green;
                        font-weight: bold;
                        font-size: 16px;
                        padding: 15px;
                        margin: 15px 0;
                        background-color: #d4edda;
                        border: 1px solid #c3e6cb;
                        border-radius: 4px;
                        text-align: center;
                        width: 100%;
                        box-sizing: border-box;
                        position: relative;
                        z-index: 1000;
                    `;
                            successMessage.innerText = data.message || 'Form submitted successfully!';

                            // Insert the success message right after the submit button's parent container
                            const submitButtonContainer = submitBtn.closest('.form-field') || submitBtn.parentNode;
                            submitButtonContainer.parentNode.insertBefore(successMessage, submitButtonContainer.nextSibling);

                            // Scroll to the success message to ensure it's visible
                            successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

                            // Keep submit button disabled to prevent multiple clicks
                            submitBtn.disabled = true;
                            submitBtn.innerHTML = 'Success...';
                            form.reset();
                            setTimeout(() => {
                                console.log('Reloading page now...');
                                window.location.reload();
                            }, 5000);
                        }
                    } else if (data.message) {
                        // Handle errors
                        if (formData.get('otp')) {
                            // OTP error
                            const errorDiv = document.createElement('div');
                            errorDiv.classList.add('error-message');
                            errorDiv.style.color = 'red';
                            errorDiv.innerText = data.message;
                            otpGroup.appendChild(errorDiv);
                        } else {
                            // Other errors
                            const emailInput = form.querySelector('[name="email"]');
                            if (emailInput && data.message.toLowerCase().includes('email')) {
                                const errorDiv = document.createElement('div');
                                errorDiv.classList.add('error-message');
                                errorDiv.style.color = 'red';
                                errorDiv.innerText = data.message;
                                emailInput.parentNode.appendChild(errorDiv);
                            } else {
                                message.style.color = 'red';
                                message.innerText = data.message;
                            }
                        }

                        setTimeout(() => {
                            message.innerText = '';
                            form.querySelectorAll('.error-message').forEach(el => el.remove());
                        }, 5000);
                    }

                    // Handle validation errors
                    if (data.errors) {
                        Object.keys(data.errors).forEach(function (field) {
                            const input = form.querySelector(`[name="${field}"]`);
                            if (input) {
                                const errorDiv = document.createElement('div');
                                errorDiv.classList.add('error-message');
                                errorDiv.style.color = 'red';
                                errorDiv.innerText = data.errors[field][0];
                                input.parentNode.appendChild(errorDiv);
                            }
                        });

                        setTimeout(() => {
                            form.querySelectorAll('.error-message').forEach(el => el.remove());
                        }, 5000);
                    }

                } catch (err) {
                    console.error('Form submission error:', err);
                    message.style.color = 'red';
                    message.innerText = 'Something went wrong. Please try again.';
                    setTimeout(() => {
                        message.innerText = '';
                    }, 5000);
                } finally {
                    if (!formData.get('otp') || !response?.ok || !data?.success) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = formData.get('otp') ? originalBtnText : 'Verify OTP';
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('hire-contact-form');
            if (!form) {
                console.warn("Form with id 'hire-contact-form' not found.");
                return;
            }
            const phoneInput = form.querySelector('input[name="number"]');
            const emailInput = form.querySelector('input[name="email"]');
            const nameInput = form.querySelector('input[name="fname"]');
            const messageInput = form.querySelector('input[name="message"]');
            const otpGroup = document.getElementById('otp-group6');
            const otpInput = document.getElementById('otp');
            const submitBtn = form.querySelector('button[type="submit"]');
            const countryCodeSelect = form.querySelector('select[name="countryCode"]');

            let otpSent = false;
            let otpVerified = false;

            function showError(input, message) {
                clearSuccess(input);
                let err = input.parentElement.querySelector('.error-message');
                if (!err) {
                    err = document.createElement('div');
                    err.className = 'error-message';
                    err.style.color = 'red';
                    err.style.marginTop = '5px';
                    input.parentElement.appendChild(err);
                }
                err.textContent = message;
            }

            function clearError(input) {
                let err = input.parentElement.querySelector('.error-message');
                if (err) err.remove();
            }

            function clearAllErrors() {
                form.querySelectorAll('.error-message').forEach(el => el.remove());
            }

            function showSuccess(element, message) {
                clearError(element);
                let msg = element.parentElement.querySelector('.success-message');
                if (!msg) {
                    msg = document.createElement('div');
                    msg.className = 'success-message';
                    msg.style.color = 'green';
                    msg.style.fontWeight = 'bold';
                    msg.style.marginTop = '5px';
                    element.parentElement.appendChild(msg);
                }
                msg.textContent = message;
            }

            function clearSuccess(element) {
                let msg = element.parentElement.querySelector('.success-message');
                if (msg) msg.remove();
            }

            function clearMessagesBelow(element) {
                clearError(element);
                clearSuccess(element);
            }

            function validatePhone(phone, countryCode) {
                if (!phone) return false;
                if (countryCode === '91') {
                    return /^[6-9]\d{9}$/.test(phone);
                } else if (countryCode === '44') {
                    return /^\d{10,11}$/.test(phone);
                } else if (countryCode === '1') {
                    return /^\d{10}$/.test(phone);
                }
                return false;
            }

            async function sendOtp() {
                clearAllErrors();
                clearSuccess(otpInput);
                clearSuccess(submitBtn);

                let valid = true;

                if (nameInput.value.trim() === '') {
                    showError(nameInput, '❌ Full name is required.');
                    valid = false;
                } else clearError(nameInput);

                if (emailInput.value.trim() === '') {
                    showError(emailInput, '❌ Email is required.');
                    valid = false;
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) {
                    showError(emailInput, '❌ Please enter a valid email.');
                    valid = false;
                } else clearError(emailInput);

                const countryCode = countryCodeSelect.value;
                const phone = phoneInput.value.trim();
                if (!validatePhone(phone, countryCode)) {
                    showError(phoneInput, '❌ Please enter a valid phone number for the selected country.');
                    valid = false;
                } else clearError(phoneInput);

                if (messageInput.value.trim() === '') {
                    showError(messageInput, '❌ Website URL is required.');
                    valid = false;
                } else clearError(messageInput);

                if (!valid) return false;

                submitBtn.disabled = true;
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending OTP...`;

                const formData = new FormData(form);
                formData.delete('otp');

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok && data.success) {
                        otpGroup.style.display = 'block';
                        otpInput.disabled = false;
                        otpInput.value = '';
                        otpInput.focus();
                        otpSent = true;
                        otpVerified = false;
                        submitBtn.innerHTML = 'Verify OTP';
                        submitBtn.disabled = false;
                        showSuccess(otpInput, 'OTP sent successfully to your email.');
                        return true;
                    } else {
                        if (data.errors) {
                            Object.keys(data.errors).forEach(field => {
                                const input = form.querySelector(`[name="${field}"]`);
                                if (input) showError(input, data.errors[field][0]);
                            });
                        } else if (data.message) {
                            showError(submitBtn, data.message);
                        }
                        submitBtn.innerHTML = originalBtnText;
                        submitBtn.disabled = false;
                        return false;
                    }
                } catch {
                    showError(submitBtn, 'Error sending OTP. Try again.');
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                    return false;
                }
            }

            async function verifyOtpAndSubmit() {
                clearAllErrors();
                clearSuccess(submitBtn);

                if (!otpInput.value.trim()) {
                    showError(otpInput, '❌ Please enter OTP.');
                    return false;
                }

                submitBtn.disabled = true;
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Verifying OTP...`;

                const formData = new FormData(form);
                formData.set('otp', otpInput.value.trim());

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok && data.success) {
                        otpVerified = true;
                        otpGroup.style.display = 'none';
                        otpInput.value = '';
                        submitBtn.innerHTML = 'Submitted';
                        submitBtn.disabled = true;
                        showSuccess(submitBtn, data.message || 'Form submitted successfully!');
                        form.reset();
                        setTimeout(() => window.location.reload(), 3000);
                        return true;
                    } else {
                        if (data.message) {
                            showError(otpInput, data.message);
                        }
                        submitBtn.innerHTML = originalBtnText;
                        submitBtn.disabled = false;
                        return false;
                    }
                } catch {
                    showError(submitBtn, 'Error verifying OTP. Try again.');
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                    return false;
                }
            }

            form.addEventListener('submit', async function (e) {
                e.preventDefault();

                if (!otpSent) {
                    await sendOtp();
                } else if (!otpVerified) {
                    await verifyOtpAndSubmit();
                }
            });
        });

    </script>


    <!-- Start of LiveChat (www.livechat.com) code -->   
    <script>        window.__lc = window.__lc || {}; window.__lc.license = 18071466; window.__lc.integration_name = "manual_channels"; window.__lc.product_name = "livechat";; (function (n, t, c) { function i(n) { return e._h ? e._h.apply(null, n) : e._q.push(n) } var e = { _q: [], _h: null, _v: "2.0", on: function () { i(["on", c.call(arguments)]) }, once: function () { i(["once", c.call(arguments)]) }, off: function () { i(["off", c.call(arguments)]) }, get: function () { if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load."); return i(["get", c.call(arguments)]) }, call: function () { i(["call", c.call(arguments)]) }, init: function () { var n = t.createElement("script"); n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n) } }; !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e }(window, document, [].slice))    </script>
        <noscript><a href="https://www.livechat.com/chat-with/18071466/" rel="nofollow">Chat with us</a>, powered by
        <a            href="https://www.livechat.com/?welcome" rel="noopener nofollow"
            target="_blank">LiveChat</a></noscript>    <!-- End of LiveChat code -->
</body>

</html>