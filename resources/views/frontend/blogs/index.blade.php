@extends("layouts.front.app")
@section("content")
    <section class="page-header page-header-secnd" style="background-image: url({{ custom_asset('front_assets/img/blog_banner.png')}});">
        <div class="page-header-shape"></div>
        <div class="container">
                <div class="row align-items-center">
                            <div class="col-md-7">
                               <div class="page-header-info">
                                    <h1>Get the updated news from our <br>redias blog</h1>
                                    <p>Everything your digital consulting business needs is already here</p>
                                    <div class="btn_digital">
                                                <a href="{{ route('contact') }}" class="default-btn"> Hire Now </a>
                                     </div>
                                </div>
                            </div>

                        <div class="col-md-5">
                            <div class="main_subscription_form  new_digital_form">
                                <div class="under_form_sestion">
                                    <h2>Get Your Quote Now</h2>
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
                                                        <option data-countryCode="IN"
                                                            value="91"{{ old('countryCode') == '91' ? 'selected' : '' }}>Ind
                                                            (+91)</option>
                                                        <option data-countryCode="UK"
                                                            value="44"{{ old('countryCode') == '44' ? 'selected' : '' }}>UK
                                                            (+44)</option>
                                                        <option data-countryCode="US"
                                                            value="1"{{ old('countryCode') == '1' ? 'selected' : '' }}>US (+1)
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
                                            <small style="color: grey; font-size: 14px;">Example: www.google.com (Full Domain Name)</small> 
                                            @error('message')
                                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                            @enderror
                                        </div>

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

            <section class="blog-section blog-page bg-grey padding all_blogs_spacing">
                <div class="container">
                    <div class="studying_banner_heading">
                        <h2>Insights for the Digital Age</h2>
                        <p>Welcome to our blog page. Stay up to date with the latest in the world of digital marketing and web development, it is always shifting and this is the scoop. Here you will find expert advice, case studies and industry news for you to use in keeping well informed and making timely business decisions. Whether you want to enhance your web presence, upgrade your web site performance or be in the know with the most current tactics of digital marketing, web development and web designing, our articles are written for you. Let us join the conversation about topics that matter, enabling you to confidently tackle the ever evolving digital space.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 sm-padding">
                            <div class="row grid-post">
                                    @foreach($blogs as $key => $blog)
                                        <div class="col-lg-4 col-md-6 col-12 padding-15">
                                            <div class="post-card">
                                                <div class="post-thumb">
                                                    <a href="{{ url('blogs').'/'.$blog->slug }}" class="hover"><img src="{{ custom_asset($blog->banner) }}" class="img-fluid img_bloger"></a>
                                                    
                                                </div>
                                                <div class="post-content-wrap">
                                                    <ul class="post-meta">
                                                        <li>
                                                            <i class="las la-calendar"></i>{{$blog->created_at}}
                                                        </li>
                                                    </ul>
                                                    <div class="post-content main_post_blog_cntnt">
                                                        <!-- <h3><a href="{{ url('blogs').'/'.$blog->slug }}" class="hover">{{$blog->title}}</a></h3> -->
                                                        <h3><a href="{{ url('blogs').'/'.$blog->slug }}" class="hover">   {{ strlen($blog->title) > 80 ? Str::limit($blog->title, 80) : $blog->title }}</a></h3>
                                                        <p><a href="{{ url('blogs').'/'.$blog->slug }}" class="hover">{{substr($blog->short_description,0,80)}} ... </a></p> 
                                                    </div> 
                                                </div>
                                            </div>                                  
                                        </div>
                                    @endforeach
                               </div>
                         </div>
                    </div>

                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                   </div>

                </div>
            </section>


@endsection