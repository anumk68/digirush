@extends('layouts.front.app')

@section('content')

<section class="page-header" style="background-image: url({{custom_asset('front_assets/img/bannner_hire_devloper.jpg')}});">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 mb-4">
                    <div class="page-header-info">
                        <h1>Hire Expert Developers to Accelerate Your Business Growth</h1>
                        <p>Empower your business with skilled developers, delivering precision and innovation every step of the way
                        </p>
                        <!-- <div class="btn_digital">
                            <a href="{{route('contact')}}" class="default-btn"> Hire Now </a>
                        </div> -->
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="main_subscription_form  new_digital_form">
                        <div class="under_form_sestion">
                            <h2>Get Your Quote Now!</h2>
                            <form method="post" action="{{ route('hire.submit') }}" id="contact-form">
                            @csrf
                            <!-- <input type="hidden" name="city_name" value="hire_developers"> -->
                            <div class="form-field">
                                <input type="text" id="fname" name="fname" placeholder="Full Name" value="{{ old('fname') }}"  oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '');">
                                @error('fname')
                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-field">
                                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
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
                                    <input type="text" id="phone" name="number" minlength="10" maxlength="10" class="form-control" value="{{ old('number') }}"  oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                </div>
                                @error('number')
                                <div class="error-message" style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-field">
                                <input type="text" id="url" name="message" placeholder="Your Website" value="{{ old('message') }}">
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

<section class="hire_devloper_section padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="under_hire_devloper">
                    <div class="hire25 text-center">
                         <h2><b>Web Developers</b></h2>
                    </div>
                    <ul class="web_devloper_main">
                        <li>
                            <p>React.js</p>
                        </li>
                        <li>
                            <p>PHP</p>
                        </li>
                        <li>
                            <p>vue.js</p>
                        </li>
                       
                        <div class="dropdown language_dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          +10
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li> HTML</li>
                          <li>Node.js</li>
                          <li>CSS</li>
                          <li>vue.js</li>
                          <li>CodeIgnite</li>
                          <li>MySQL</li>
                          <li>MongoDB</li>
                          <li>APIs</li>
                          <li>Git</li>
                        </ul>
                      </div>
                    
                    </ul>

                    <div class="owl-carousel owl-theme" id="flex_main_hire">
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_1.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_2.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_3.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                      
                    </div>
                   
                  <div class="flex_main_btn">
                    <div class="hourly_monthly_packages">
                        <h2 class="mb-0">Hourly</h2>
                        <div class="mt-0 ">
                            <div class="price-tag mt-0 text-left align-self-center">
                                <span class="symbol"></span>
                                <span class="amount" style="font-size: 24px">$15 - $35</span>
                                <span class="after" style="font-size: 13px">/Hour</span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="hourly_monthly_packages ">
                        <h2 class="mb-0">Monthly</h2>
                        <div class="mt-0">
                            <div class="price-tag mt-0 text-left align-self-center">
                                <span class="symbol"> </span>
                                <span class="amount" style="font-size: 19px"> $2,400 - $5,600</span>
                                <span class="after" style="font-size: 13px">/Hour</span>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="btn_hire">
                    <button type="button" class="price-button align-self-end w-50 mt-0 border-0" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Now</button>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="under_hire_devloper">
                    <div class="hire25 text-center">
                         <h2><b>Frontend Developer</b></h2>
                    </div>
                    <ul class="web_devloper_main">
                        <li>
                            <p>HTML</p>
                        </li>
                        <li>
                            <p>CSS</p>
                        </li>
                        <li>
                            <p>Responsive</p>
                        </li>
                        <div class="dropdown language_dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          +6
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li>JavaScript</li>
                          <li>React.Js</li>
                          <li>Vue.Js</li>
                          <li>Bootstrap</li>
                          <li>Tailwind CSS</li>
                          <li>Git</li>
                        </ul>
                      </div>
                    
                    </ul>
                    <div class="owl-carousel owl-theme flex_main_hires" >
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_4.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_5.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_3.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                       
                    </div>

                    <div class="flex_main_btn">
                        <div class="hourly_monthly_packages">
                            <h2 class="mb-0">Hourly</h2>
                            <div class="mt-0 ">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"></span>
                                    <span class="amount" style="font-size: 24px">$10 - $20</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="hourly_monthly_packages ">
                            <h2 class="mb-0">Monthly</h2>
                            <div class="mt-0">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"> </span>
                                    <span class="amount" style="font-size: 19px"> $1,600 to $3,200</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="btn_hire">
                        <button type="button" class="price-button align-self-end w-50 mt-0 border-0" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Now</button>
                      </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="under_hire_devloper">
                    <div class="hire25 text-center">
                         <h2><b>Backend Developer</b></h2>
                    </div>
                    <ul class="web_devloper_main">
                        <li>
                            <p>PHP</p>
                        </li>
                        <li>
                            <p>MySQL</p>
                        </li>
                        <li><p>AWS</p></li>            
                        <div class="dropdown language_dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          +4
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li>MongoDB</li>
                          <li> APIs</li>
                          <li>AWS</li>
                          <li>Firebase</li>
                        </ul>
                      </div>
                    
                    </ul>
                    <div class="owl-carousel owl-theme flex_main_hires">
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_3.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_4.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_1.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_2.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>

                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/frontent_project_5.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                   
                    </div>

                    <div class="flex_main_btn">
                        <div class="hourly_monthly_packages">
                            <h2 class="mb-0">Hourly</h2>
                            <div class="mt-0 ">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"></span>
                                    <span class="amount" style="font-size: 24px">$20 - $40</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="hourly_monthly_packages ">
                            <h2 class="mb-0">Monthly</h2>
                            <div class="mt-0">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"> </span>
                                    <span class="amount" style="font-size: 19px">$3,200 to $6,400</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="btn_hire">
                        <button type="button" class="price-button align-self-end w-50 mt-0 border-0" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Now</button>
                      </div>
                   
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="under_hire_devloper">
                    <div class="hire25 text-center">
                         <h2><b>WordPress Developer</b></h2>
                    </div>
                    <ul class="web_devloper_main">
                        <li>
                            <p>PHP</p>
                        </li>
                        <li>
                            <p>WordPress</p>
                        </li>
                        <li>
                            <p>MYSQL</p>
                        </li>
                      
                        <div class="dropdown language_dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          +9
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li>HTML</li>
                          <li>CSS</li>
                          <li>JavaScript</li>
                          <li>WooCommerce</li>
                          <li>Git</li>
                          <li>Yoast SEO</li>
                          <li> Elementor</li>
                          <li>WPML</li>
                          <li>REST APIs</li>
                        </ul>
                      </div>
                    
                    </ul>
                    <div class="owl-carousel owl-theme flex_main_hires">
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/wordpress_project_1.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/wordpress_project_2.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/wordpress_project_1.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/wordpress_project_2.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>

                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/wordpress_project_1.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/wordpress_project_2.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                    </div>

                    <div class="flex_main_btn">
                        <div class="hourly_monthly_packages">
                            <h2 class="mb-0">Hourly</h2>
                            <div class="mt-0 ">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"></span>
                                    <span class="amount" style="font-size: 24px">$10 - $20</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="hourly_monthly_packages ">
                            <h2 class="mb-0">Monthly</h2>
                            <div class="mt-0">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"> </span>
                                    <span class="amount" style="font-size: 19px">$3,200 to $6,400</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="btn_hire">
                        <button type="button" class="price-button align-self-end w-50 mt-0 border-0" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Now</button>
                      </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="under_hire_devloper">
                    <div class="hire25 text-center">
                         <h2><b>Shopify Developer</b></h2>
                    </div>
                    <ul class="web_devloper_main">
                        <li>
                            <p>Liquid</p>
                        </li>
                        <li>
                            <p>HTML</p>
                        </li>
                                         <li>
                            <p>Shopify </p>
                        </li>
                        <div class="dropdown language_dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          +6
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li>JavaScript</li>
                          <li>Shopify API</li>
                          <li>RESTful APIs</li>
                          <li>Payment Integration</li>
                          <li>Webhooks</li>
                        </ul>
                      </div>
                    
                    </ul>
                    <div class="owl-carousel owl-theme flex_main_hires">
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/shopify_project.png') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/bryke.png') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/iinnate_colletction.png') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/pendulumilife.png') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                     
                    </div>
                    <div class="flex_main_btn">
                        <div class="hourly_monthly_packages">
                            <h2 class="mb-0">Hourly</h2>
                            <div class="mt-0 ">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"></span>
                                    <span class="amount" style="font-size: 24px">$10 - $20</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="hourly_monthly_packages ">
                            <h2 class="mb-0">Monthly</h2>
                            <div class="mt-0">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"> </span>
                                    <span class="amount" style="font-size: 19px">$3,200 to $6,400</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="btn_hire">
                        <button type="button" class="price-button align-self-end w-50 mt-0 border-0" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Now</button>
                      </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="under_hire_devloper">
                    <div class="hire25 text-center">
                         <h2><b>App Developer</b></h2>
                    </div>
                    <ul class="web_devloper_main">
                        <li>
                            <p> React</p>
                        </li>
                        <li>
                            <p>Flutter</p>
                        </li>
                        <li>
                            <p>SQLite</p>
                        </li>
                      
                        <div class="dropdown language_dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          +2
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li>Firebase</li>
                          <li>REST APIs</li>
                        
                        </ul>
                      </div>
                    
                    </ul>
                    <div class="owl-carousel owl-theme flex_main_hires">
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/app_devlopemt_1.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                 <a href="#"> <img src="{{ custom_asset('front_assets/img/app_devlopemt_1.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                        <div class="item">    
                            <div class="img_devlop_hire">
                                <a href="#"> <img src="{{ custom_asset('front_assets/img/app_devlopemt_1.jpg') }}" alt="Hire Expert Developer"></a>
                            </div>
                        </div>
                 
                    </div>
                    <div class="flex_main_btn">
                        <div class="hourly_monthly_packages">
                            <h2 class="mb-0">Hourly</h2>
                            <div class="mt-0 ">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"></span>
                                    <span class="amount" style="font-size: 24px">$10 - $20</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="hourly_monthly_packages ">
                            <h2 class="mb-0">Monthly</h2>
                            <div class="mt-0">
                                <div class="price-tag mt-0 text-left align-self-center">
                                    <span class="symbol"> </span>
                                    <span class="amount" style="font-size: 19px">$3,200 to $6,400</span>
                                    <span class="after" style="font-size: 13px">/Hour</span>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="btn_hire">
                        <button type="button" class="price-button align-self-end w-50 mt-0 border-0" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Now</button>
                      </div>
                </div>
            </div>
           
        </div>
    </div>
</section>

<section class="hiring_word_devloper padding pt-0">
    <div class="container">
        <div class="heading_hiring_word">
            <h2>Supercharge Your Success with World Class Talent </h2>
            <p>Tap into a pool of top tier developers and innovators to accelerate growth and achieve your business goals
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="under_hiring_word">
                    <div class="img_hiring">
                        <img class="lazy loading bouncing-image" src="{{ custom_asset('front_assets/img/hire_devloper_logos_1.png')}}" alt="Basic"  data-was-processed="true">
                    </div>
                    <div class="under_txt_hiring">
                        <h2> Experienced Web Developers</h2>
                        <p>Our Experienced Web developers are well know what their clients require and ensure everything in this process meets the clients' requirements. They have insightful knowledge and try to input to the best in developing outstanding and unique development.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="under_hiring_word">
                    <div class="img_hiring">
                        <img class="lazy loading bouncing-image" src="{{ custom_asset('front_assets/img/hire_devloper_logos_2.png')}}" alt="Basic" data-was-processed="true">
                    </div>
                    <div class="under_txt_hiring">
                        <h2>Experienced Software Developers</h2>
                        <p>Experienced Software Developers possessing 2 to 8 years of experience are properly skilled and proficient at each and every step of the development process. They bring out the best in developing and ensure success with bug-free solutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="under_hiring_word">
                    <div class="img_hiring">
                        <img class="lazy loading bouncing-image" src="{{ custom_asset('front_assets/img/hire_devloper_logos_3.png')}}" alt="Basic" data-was-processed="true">
                    </div>
                    <div class="under_txt_hiring">
                        <h2>Experienced Project Managers </h2>
                        <p>Our experienced project managers know how to deal with the projects and handle them accordingly. Digi Rush Solutions is highly skilled in IT development, and our project managers keep track of all the minor details in the development process with clients' satisfaction.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="under_hiring_word">
                    <div class="img_hiring">
                        <img class="lazy loading bouncing-image" src="{{ custom_asset('front_assets/img/hire_devloper_logos_4.png')}}" alt="Basic" data-was-processed="true">
                    </div>
                    <div class="under_txt_hiring">
                        <h2> Experienced UI/UX Designers</h2>
                        <p>Our UI/UX designers understand how a website can be very important for business in the present competing world. They have specialized expertise in all the latest web technologies and provide excellent web design and development services according to client needs.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="under_hiring_word">
                    <div class="img_hiring">
                        <img class="lazy loading bouncing-image" src="{{ custom_asset('front_assets/img/hire_devloper_logos_5.png')}}" alt="Basic" data-was-processed="true">
                    </div>
                    <div class="under_txt_hiring">
                        <h2>Experienced App Developers</h2>
                        <p>Excellent and committed App Developers of Digi Rush Solutions. We possess a team of expert App developers with several years of experience in the industry. The App Developers have a futuristic vision of App development.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="under_hiring_word">
                    <div class="img_hiring">
                        <img class="lazy loading bouncing-image" src="{{ custom_asset('front_assets/img/hire_devloper_logos_6.png')}}" alt="Basic" data-was-processed="true">
                    </div>
                    <div class="under_txt_hiring">
                        <h2>Experienced Testers</h2>
                        <p>We ensure that each solution is high quality. Quality Assurance is always respected in the success of any good solution and we believe that offering solutions within the market with the best quality is possible. Our QA team runs checks on every project we work on and assists us to deliver bug-free solutions to our clients.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('scripts')
    <!-- Modal -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

 <div class="modal fade" id="hireModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="reset_form()"></button>
            </div>
            <div class="modal-body">
                <div class="_cntact_form_landing">
                @include('frontend.commonform.hireform')
                </div>
            </div>
        </div>
    </div>
 </div>


<script>
    function reset_form(){
        location.reload();        
    };
</script>

 @endsection