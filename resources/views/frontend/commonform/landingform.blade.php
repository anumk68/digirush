<form  action="{{ route('homelanding.store') }}" method="POST" id="bannerForm">
    @csrf
    <input type="hidden" name="type" value="digital-web-services">
    <div class="txt_form landing_page_txxt">
        <img src="{{ custom_asset('front_assets/img/GET-4.gif') }}" alt="">
        <h2>Need Help with Web Design & Development Project?</h2>
        <p>Let’s making your project in reality</p>
      
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="fname">First name*</label>
            <input type="text" id="fname" name="fname" placeholder="First Name" value="{{ old('fname') }}">
            <div class="text-danger"></div>
            @error('fname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="lname">Last name</label>
            <input type="text" id="lname" name="lname" placeholder="Last name" value="{{ old('lname') }}">
            <div class="text-danger"></div>
            @error('lname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="phone_no">Phone No*</label>
            <input type="tel" id="phone_no" name="phone_no" placeholder="Phone No" value="{{ old('phone_no') }}" pattern="^\d{10}$" maxlength="10">
            <div class="text-danger"></div>
            @error('phone_no')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
            <div class="text-danger"></div>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 ">
            <label for="services">Services*</label>
            <select name="services" id="services" required>
                <option value="">Select Service</option>
                <option value="Website Design & Development" {{ old('services') == 'Website Design & Development' ? 'selected' : '' }}>Website Design & Development</option>
                <option value="Application Development" {{ old('services') == 'Application Development' ? 'selected' : '' }}>Application Development</option>
                <option value="Software Development" {{ old('services') == 'Software Development' ? 'selected' : '' }}>Software Development</option>
                <option value="Digital Marketing Services" {{ old('services') == 'Digital Marketing Services' ? 'selected' : '' }}>All Digital Marketing Services</option>
                <option value="SEO Services" {{ old('services') == 'SEO Services' ? 'selected' : '' }}>SEO Services</option>
                <option value="SMO Services" {{ old('services') == 'SMO Services' ? 'selected' : '' }}>SMO Services</option>
                <option value="PPC Services" {{ old('services') == 'PPC Services' ? 'selected' : '' }}>PPC Services</option>
                <option value="Graphic Designing" {{ old('services') == 'Graphic Designing' ? 'selected' : '' }}>Graphic Designing</option>
                <option value="Video Editing" {{ old('services') == 'Video Editing' ? 'selected' : '' }}>Video Editing</option>
                <option value="Email Marketing" {{ old('services') == 'Email Marketing' ? 'selected' : '' }}>Email Marketing</option>
            </select>
            <div class="text-danger"></div>
            @error('services')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="City" value="{{ old('city') }}">
            <div class="text-danger"></div>
            @error('city')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="btn_submit">
            <button type="submit">Submit</button>
        </div>
    </div>
</form>

