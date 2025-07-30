<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $metatitle ?? 'Digi Rush Solutions | A Complete Web Solutions Agency in India' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Digi Rush Solutions offers expert digital marketing, web design, and development services for online success with customized solutions.' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'default' }}">
    <meta name="author" content="Digi Rush Solutions">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="JgGUf8Zekt05bkRfz8v8KfEGcQjGR67efwDu_JuA6Js" />

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $metatitle ?? 'Digi Rush Solutions | A Complete Web Solutions Agency in India' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Digi Rush Solutions offers expert digital marketing, web design, and development services for online success with customized solutions.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('public/front_assets/img/F-Logo.png') }}">
    <meta property="og:url" content="@yield('og_url', request()->url())">
    <meta property="og:type" content="website">

    {{-- Canonical & Favicon --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="shortcut icon" href="{{ asset('public/front_assets/img/DigiRush_Solution.png') }}" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    {{-- External Fonts & Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com' alt='ClickCease'/></a>
    </noscript>
</head>

<body class="header-2">
  
    @if (Request::url() != route('home.landing') && Request::url() != route('seo-digitalservices'))
        @include('layouts.front.header')
    @endif

    @yield('content')

    @if (Request::url() != route('home.landing')  && Request::url() != route('seo-digitalservices'))
        @include('layouts.front.footer')
    @endif

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('public/front_assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}" ></script>
    <script src="{{asset('public/front_assets/js/vendor/bootstrap.min.js')}}" ></script>
    <script src="{{asset('public/front_assets/js/vendor/popper.min.js')}}" ></script>
    <script src="{{asset('public/front_assets/js/vendor/odometer.min.js')}}" ></script>
    <script src="{{asset('public/front_assets/js/vendor/waypoints.min.js')}}" ></script>
    <!-- <script src="{{asset('public/front_assets/js/vendor/venobox.min.js')}}" ></script> -->
    <script src="{{asset('public/front_assets/js/vendor/swiper.min.js')}}" ></script>
    <script src="{{asset('public/front_assets/js/vendor/smooth-scroll.js')}}" ></script>
  
    <script src="{{asset('public/front_assets/js/vendor/wow.min.js')}}" ></script>
    <script src="{{asset('public/front_assets/js/quote.js')}}" ></script>
    <script src="{{asset('public/front_assets/js/main.js')}}" ></script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
    @yield('scripts')
  
    <script>
        $(document).ready(function() {
            
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
        $(document).ready(function() {
            function close_accordion_section() {
                $('.accordion .accordion-section-title').removeClass('active');
                $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
            }

            $('.accordion-section-title').click(function(e) {
                var currentAttrValue = $(this).attr('href');

                if($(e.target).is('.active')) {
                    close_accordion_section();
                }else {
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
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});
</script>

<script>
        $('.flex_main_hires').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});
</script>

 <script>
 document.addEventListener('DOMContentLoaded', function() {
    const submitBtn = document.querySelector('button[type="submit"]');
    const form = document.getElementById('bannerForm');
    const modal = document.getElementById('SearchModal'); 
    
    submitBtn.disabled = false;
    
    form.addEventListener('input', function() {
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

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 
    
        if (!submitBtn.disabled) {
            alert('Form submitted successfully!');
            form.reset(); 
            resetForm(); 
    
            $('#SearchModal').modal('hide');
        }
    });
    
    $('#SearchModal').on('hidden.bs.modal', function() {
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
        modalCloseButton.addEventListener('click', function() {
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




</body>
</html>
<!-- Start of LiveChat (www.livechat.com) code -->    <script>        window.__lc = window.__lc || {};        window.__lc.license = 18071466;        window.__lc.integration_name = "manual_channels";        window.__lc.product_name = "livechat";        ; (function (n, t, c) { function i(n) { return e._h ? e._h.apply(null, n) : e._q.push(n) } var e = { _q: [], _h: null, _v: "2.0", on: function () { i(["on", c.call(arguments)]) }, once: function () { i(["once", c.call(arguments)]) }, off: function () { i(["off", c.call(arguments)]) }, get: function () { if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load."); return i(["get", c.call(arguments)]) }, call: function () { i(["call", c.call(arguments)]) }, init: function () { var n = t.createElement("script"); n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n) } }; !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e }(window, document, [].slice))    </script>    <noscript><a href="https://www.livechat.com/chat-with/18071466/" rel="nofollow">Chat with us</a>, powered by <a            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>    <!-- End of LiveChat code -->