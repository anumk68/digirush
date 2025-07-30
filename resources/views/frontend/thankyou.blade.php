@extends('layouts.front.app')

@section('headTag')

<script>
    gtag('event', 'conversion', {
        'send_to': 'AW-11046950714/2YhRCMmVlpMYELquzJMp',
        'value': 1.0,
        'currency': 'INR'
    });
</script>

<script>
gtag('config', 'AW-11046950714/UgWvCLDfstkZELquzJMp', {
  'phone_conversion_number': '+91 99159 54999'
});
</script>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '572282435289817');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=572282435289817&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
@endsection
@section('stylesheets')
<style>
    .img_thanku_gif img {
        width: 100%;
        max-width: 250px;
    }
    .img_thanku_gif {
        text-align: center;
    }
    .img_thanku_gif h2 {
        font-size: 23px;
        margin-top: 20px;
    }
    .under_main_thanku {
        padding: 70px 0;
    }
</style>
@endsection
@section('content')
@if (!session()->has('form_submitted'))
    <script>
        window.location.href = "{{ route('home') }}"; 
    </script>
@else
    <section class="thanku_page_main">
        <div class="container">
            <div class="under_main_thanku">
                <div class="img_thanku_gif">
                    <img src="{{ asset('public/front_assets/img/thanku-page.avif') }}" alt="">
               
                    <h2>We Will Contact You Shortly</h2>
                </div>
            </div>
        </div>
    </section>
@endif
@endsection
