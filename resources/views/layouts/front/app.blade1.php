<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $data->meta_title ?? 'Digi Rush Solutions | A Complete Web Solutions Agency in India' }}</title>
    <meta name="description" content="{!! trim(html_entity_decode(strip_tags($data->meta_description ?? 'Digi Rush Solutions offers expert digital marketing, web design, and development services for online success with customized solutions.'))) !!}">
    <meta name="keywords" content="{{ $data->meta_keyword ?? 'default' }}">
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
                "email": "mailto:contact@digirushsolutions.com",
                "areaServed": "IN",
                "availableLanguage": "en"
            },
            {
                "@type": "ContactPoint",
                "telephone": "+1 202 539 0556",
                "contactType": "technical support",
                "email": "mailto:contact@digirushsolutions.com",
                "areaServed": "US",
                "availableLanguage": "en"
            },
            {
                "@type": "ContactPoint",
                "telephone": "+44 1865 60 0823",
                "contactType": "",
                "email": "mailto:contact@digirushsolutions.com",
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
    <!-- <script src="{{asset('public/front_assets/js/vendor/venobox.min.js')}}" ></script> -->
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
            const modal = document.getElementById('SearchModal');

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
    <script>
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
        document.getElementById('myForm').addEventListener('submit', async function (e) {
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
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myform1');
            const otpFieldGroup = document.getElementById('otp-group');
            const otpInput = otpFieldGroup.querySelector('input[name="otp"]');
            const submitBtn = form.querySelector('button[type="submit"]');
            const message = document.getElementById('message');

            // These lines now look outside the form
            const countryCodeField = document.querySelector('select[name="countryCode"]');
            const mobileField = document.querySelector('input[name="number"]');

            async function verifyPhoneNumber() {
                const code = countryCodeField?.value?.trim();
                const mobile = mobileField?.value?.trim();
                if (!code || !mobile || mobile.length < 6) return;

                const fullNumber = `+${code}${mobile}`;
                const url = `http://apilayer.net/api/validate?access_key=b3efc851c52e731273540429403e9794&number=${encodeURIComponent(fullNumber)}&format=1`;

                try {
                    const res = await fetch(url);
                    const data = await res.json();
                    if (!data.valid) {
                        message.innerText = "Invalid phone number";
                        message.style.color = "red";
                        throw new Error("Invalid number");
                    } else {
                        message.innerText = "Phone number valid!";
                        message.style.color = "green";
                    }
                } catch (err) {
                    console.error(err);
                    message.innerText = "Phone verification failed.";
                    message.style.color = "red";
                }
            }

            // Verify on blur or mouseout
            mobileField.addEventListener('blur', verifyPhoneNumber);
            mobileField.addEventListener('mouseout', verifyPhoneNumber);

            form.addEventListener('submit', async function (e) {
                e.preventDefault();

                const formData = new FormData(form);
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';

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
                    message.style.color = data.success ? 'green' : 'red';
                    message.innerText = data.message;

                    if (data.success) {
                        if (data.refresh) {
                            window.location.reload();
                        } else if (!formData.get('otp')) {
                            otpFieldGroup.style.display = 'block';
                            otpInput.disabled = false;
                            otpInput.focus();
                            submitBtn.innerHTML = 'Verify OTP';
                        }
                    }
                } catch (err) {
                    console.error('Form submission error:', err);
                    message.style.color = 'red';
                    message.innerText = "Something went wrong. Please try again.";
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = formData.get('otp') ? originalBtnText : 'Verify OTP';
                }
            });
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myform2');
            const otpGroup = document.getElementById('otp-group2');
            const otpInput = otpGroup.querySelector('input[name="otp"]');
            const submitBtn = form.querySelector('button[type="submit"]');
            const messageBox = document.getElementById('messageForm2');
            const originalBtnText = submitBtn.innerHTML;

            const countryCodeField = form.querySelector('select[name="countryCode"]');
            const mobileField = form.querySelector('input[name="number"]');

            let phoneVerified = false;

            async function verifyPhoneNumber(code, mobile) {
                const fullNumber = `+${code}${mobile}`;
                try {
                    const url = `http://apilayer.net/api/validate?access_key=b3efc851c52e731273540429403e9794&number=${encodeURIComponent(fullNumber)}&format=1`;
                    const res = await fetch(url);
                    const data = await res.json();
                    if (data.valid) {
                        phoneVerified = true;
                        messageBox.innerText = "Phone number verified.";
                        messageBox.style.color = "green";
                    } else {
                        phoneVerified = false;
                        messageBox.innerText = "Invalid phone number.";
                        messageBox.style.color = "red";
                    }
                } catch (err) {
                    phoneVerified = false;
                    messageBox.innerText = "Failed to verify number.";
                    messageBox.style.color = "red";
                }
            }
            function attachVerificationTriggers() {
                ['blur', 'mouseout'].forEach(evt => {
                    mobileField.addEventListener(evt, () => {
                        const code = countryCodeField.value.trim();
                        const mobile = mobileField.value.trim();
                        if (mobile.length >= 6 && code.length > 0) {
                            verifyPhoneNumber(code, mobile);
                        }
                    });
                });
            }
            attachVerificationTriggers();
            form.addEventListener('submit', async function (e) {
                e.preventDefault();
                if (!phoneVerified) {
                    messageBox.innerText = "Please enter a valid phone number before submitting.";
                    messageBox.style.color = "red";
                    return;
                }
                let wasOtpDisabled = otpInput.disabled;
                if (wasOtpDisabled) otpInput.disabled = false;
                const formData = new FormData(form);
                if (wasOtpDisabled) otpInput.disabled = true;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
                form.querySelectorAll('.error-message').forEach(el => el.remove());
                messageBox.innerText = '';
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
                        messageBox.style.color = 'green';
                        messageBox.innerText = data.message;
                        if (!formData.get('otp')) {
                            otpGroup.style.display = 'block';
                            otpInput.disabled = false;
                            otpInput.focus();
                            submitBtn.innerHTML = 'Verify OTP';
                        } else {
                            setTimeout(() => {
                                window.location.reload();
                            }, 3000);
                        }
                    } else if (response.status === 422 && data.errors) {
                        for (let field in data.errors) {
                            const input = form.querySelector(`[name="${field}"]`);
                            if (input) {
                                const errorDiv = document.createElement('div');
                                errorDiv.classList.add('error-message');
                                errorDiv.style.color = 'red';
                                errorDiv.innerText = data.errors[field][0];
                                input.parentNode.appendChild(errorDiv);
                            }
                        }
                        messageBox.style.color = 'red';
                        messageBox.innerText = data.message || 'Validation failed.';
                    } else {
                        messageBox.style.color = 'red';
                        messageBox.innerText = data.message || 'Something went wrong.';
                    }
                } catch (err) {
                    console.error(err);
                    messageBox.style.color = 'red';
                    messageBox.innerText = 'Something went wrong. Please try again.';
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = formData.get('otp') ? originalBtnText : 'Verify OTP';
                }
            });
        });
    </script>





    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('myform2').addEventListener('submit', async function (e) {
                e.preventDefault();
                const form = e.target;
                const otpGroup = document.getElementById('otp-group2');
                const otpInput = otpGroup.querySelector('input[name="otp"]');
                const submitBtn = form.querySelector('button[type="submit"]');
                const message = document.getElementById('message');
                const originalBtnText = submitBtn.innerHTML;
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
                        message.style.color = 'green';
                        message.innerText = data.message;
                        if (!formData.get('otp')) {
                            otpGroup.style.display = 'block';
                            otpInput.disabled = false;
                            otpInput.focus();
                            submitBtn.innerHTML = 'Verify OTP';
                            setTimeout(() => {
                                message.innerText = 'Form Submit successfully!';
                            }, 5000);
                        } else {
                            setTimeout(() => {
                                window.location.reload();
                            }, 5000);
                        }
                    } else if (response.status === 422 && data.errors) {
                        for (let field in data.errors) {
                            const input = form.querySelector(`[name="${field}"]`);
                            if (input) {
                                const errorDiv = document.createElement('div');
                                errorDiv.classList.add('error-message');
                                errorDiv.style.color = 'red';
                                errorDiv.innerText = data.errors[field][0];
                                input.parentNode.appendChild(errorDiv);
                            }
                        }
                        message.style.color = 'red';
                        message.innerText = data.message || 'Validation failed.';
                    } else {
                        message.style.color = 'red';
                        message.innerText = data.message || 'Something went wrong.';
                    }
                } catch (err) {
                    console.error(err);
                    message.style.color = 'red';
                    message.innerText = 'Something went wrong. Please try again.';
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = formData.get('otp') ? originalBtnText : 'Verify OTP';
                }
            });
        });
    </script> -->



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myform3');
            const countryCodeField = form.querySelector('select[name="countryCode"]');
            const mobileField = form.querySelector('input[name="phone"]');
            const emailField = form.querySelector('input[name="email"]');
            const otpFieldGroup = document.getElementById('otp-group1');
            const otpInput = otpFieldGroup.querySelector('input[name="otp"]');
            const message = document.getElementById('message');
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
                    const url = `https://apilayer.net/api/validate?access_key=b3efc851c52e731273540429403e9794&number=${encodeURIComponent(fullNumber)}&format=1`;
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
                            if (data.refresh) window.location.reload();
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








    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('myform3').addEventListener('submit', async function (e) {
                e.preventDefault();
                const form = e.target;
                const formData = new FormData(form);
                const otpFieldGroup = document.getElementById('otp-group1');
                const otpInput = otpFieldGroup.querySelector('input[name="otp"]');
                const submitBtn = form.querySelector('button[type="submit"]');
                const message = document.getElementById('message');
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
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
                        message.style.color = 'green';
                        message.innerText = data.message;
                        if (data.refresh) {
                            window.location.reload();
                        }
                        else if (otpFieldGroup.style.display === 'none') {
                            otpFieldGroup.style.display = 'block';
                            otpInput.removeAttribute('disabled');
                            otpInput.focus();
                            submitBtn.innerHTML = 'Verify OTP';
                        }
                    }
                    else if (response.status === 422 && data.errors) {
                        for (let field in data.errors) {
                            const input = form.querySelector(`[name="${field}"]`);
                            if (input) {
                                const errorDiv = document.createElement('div');
                                errorDiv.classList.add('error-message');
                                errorDiv.style.color = 'red';
                                errorDiv.innerText = data.errors[field][0];
                                input.parentNode.appendChild(errorDiv);
                            }
                        }
                        message.style.color = 'red';
                        message.innerText = data.message || 'Validation failed.';
                    }
                    else {
                        message.style.color = 'red';
                        message.innerText = data.message || 'Something went wrong.';
                    }
                } catch (err) {
                    console.error(err);
                    message.style.color = 'red';
                    message.innerText = 'Something went wrong. Please try again.';
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = otpInput.value.trim() ? originalBtnText : 'Verify OTP';
                }
            });
        });
    </script> -->



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('contact-form');
            const phoneInput = document.getElementById('phone');
            const countryCode = document.querySelector('[name="countryCode"]');
            const message = document.getElementById('message');
            const otpGroup = document.getElementById('otp-group4');
            const otpInput = otpGroup.querySelector('input[name="otp"]');
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            let isPhoneValid = false;

            phoneInput.addEventListener('blur', async function () {
                const phone = phoneInput.value.trim();
                if (!phone || !/^\d{10}$/.test(phone)) {
                    isPhoneValid = false;
                    message.innerText = '❌ Please enter a valid 10-digit number.';
                    message.style.color = 'red';
                    return;
                }

                const fullNumber = `+${countryCode.value}${phone}`;
                message.innerText = 'Validating phone number...';
                message.style.color = 'blue';

                // ✅ MOCKING VALID RESPONSE
                setTimeout(() => {
                    isPhoneValid = true;
                    message.innerText = '✅ Phone number is valid.';
                    message.style.color = 'green';
                }, 1000);
            });

            form.addEventListener('submit', async function (e) {
                e.preventDefault();

                message.innerText = '';
                form.querySelectorAll('.error-message').forEach(el => el.remove());

                let wasOtpDisabled = otpInput.disabled;
                if (wasOtpDisabled) otpInput.disabled = false;

                const formData = new FormData(form);
                if (wasOtpDisabled) otpInput.disabled = true;

                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Processing...';

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
                        message.style.color = 'green';
                        message.innerText = data.message;

                        if (!formData.get('otp')) {
                            otpGroup.style.display = 'block';
                            otpInput.disabled = false;
                            otpInput.focus();
                            submitBtn.innerHTML = 'Verify OTP';
                            setTimeout(() => message.innerText = '', 5000);
                        } else {
                            message.innerText = data.message || 'Form submitted successfully!';
                            setTimeout(() => window.location.reload(), 3000);
                        }

                    } else {
                        if (data.message) {
                            if (formData.get('otp')) {
                                const errorDiv = document.createElement('div');
                                errorDiv.classList.add('error-message');
                                errorDiv.style.color = 'red';
                                errorDiv.innerText = data.message;
                                otpGroup.appendChild(errorDiv);
                            } else if (data.message === 'Please enter a valid mobile phone number.') {
                                const phoneErrorDiv = document.createElement('div');
                                phoneErrorDiv.classList.add('error-message');
                                phoneErrorDiv.style.color = 'red';
                                phoneErrorDiv.innerText = data.message;

                                const phoneField = form.querySelector('[name="number"]');
                                if (phoneField && phoneField.parentNode) {
                                    phoneField.parentNode.appendChild(phoneErrorDiv);
                                }
                            } else {
                                message.innerText = data.message;
                                message.style.color = 'red';
                            }
                        }

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
                        }

                        setTimeout(() => {
                            message.innerText = '';
                            form.querySelectorAll('.error-message').forEach(el => el.remove());
                        }, 6000);
                    }
                } catch (error) {
                    console.error('Form submit error:', error);
                    message.innerText = '⚠️ Something went wrong. Please try again.';
                    message.style.color = 'red';
                    setTimeout(() => message.innerText = '', 5000);
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = formData.get('otp') ? originalBtnText : 'Verify OTP';
                }
            });
        });
    </script>






    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('contact-form').addEventListener('submit', async function (e) {
                e.preventDefault();
                const form = e.target;
                const otpGroup = document.getElementById('otp-group4');
                const otpInput = otpGroup.querySelector('input[name="otp"]');
                const submitBtn = form.querySelector('button[type="submit"]');
                const message = document.getElementById('message');
                const originalBtnText = submitBtn.innerHTML;
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
                        message.style.color = 'green';
                        message.innerText = data.message;
                        if (!formData.get('otp')) {
                            otpGroup.style.display = 'block';
                            otpInput.disabled = false;
                            otpInput.focus();
                            submitBtn.innerHTML = 'Verify OTP';
                            setTimeout(() => {
                                message.innerText = '';
                            }, 5000);
                        } else {
                            submitBtn.disabled = true;
                            message.style.color = 'green';
                            message.innerText = data.message || 'Form submitted successfully!';
                            setTimeout(() => {
                                window.location.reload();
                            }, 3000);
                        }
                    } else if (data.message) {
                        const emailInput = form.querySelector('[name="email"]');
                        if (emailInput) {
                            const errorDiv = document.createElement('div');
                            errorDiv.classList.add('error-message');
                            errorDiv.style.color = 'red';
                            errorDiv.innerText = data.message;
                            emailInput.parentNode.appendChild(errorDiv);
                        } else {
                            message.style.color = 'red';
                            message.innerText = data.message;
                        }
                        setTimeout(() => {
                            message.innerText = '';
                            form.querySelectorAll('.error-message').forEach(el => el.remove());
                        }, 5000);
                    }
                } catch (err) {
                    console.error(err);
                    message.style.color = 'red';
                    message.innerText = 'Something went wrong. Please try again.';
                    setTimeout(() => { message.innerText = ''; }, 5000);
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = formData.get('otp') ? originalBtnText : 'Verify OTP';
                }
            });
        });
    </script> -->








    <!-- Start of LiveChat (www.livechat.com) code -->   
    <script>        window.__lc = window.__lc || {}; window.__lc.license = 18071466; window.__lc.integration_name = "manual_channels"; window.__lc.product_name = "livechat";; (function (n, t, c) { function i(n) { return e._h ? e._h.apply(null, n) : e._q.push(n) } var e = { _q: [], _h: null, _v: "2.0", on: function () { i(["on", c.call(arguments)]) }, once: function () { i(["once", c.call(arguments)]) }, off: function () { i(["off", c.call(arguments)]) }, get: function () { if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load."); return i(["get", c.call(arguments)]) }, call: function () { i(["call", c.call(arguments)]) }, init: function () { var n = t.createElement("script"); n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n) } }; !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e }(window, document, [].slice))    </script>
        <noscript><a href="https://www.livechat.com/chat-with/18071466/" rel="nofollow">Chat with us</a>, powered by
        <a            href="https://www.livechat.com/?welcome" rel="noopener nofollow"
            target="_blank">LiveChat</a></noscript>    <!-- End of LiveChat code -->
</body>

</html>