@extends('layouts.front.app')
@section('content')

<section class="page-header payment_banner" style="background-image: {{ custom_asset('front_assets/img/contact_banner.webp') }}; background-size: cover; background-position: center; padding: 80px 0;">
    <div class="container text-white text-center">
        <h1 class="display-5 fw-bold payment_heading">Find the Perfect Solution for Your Business</h1>
        <p class="lead mt-3">Lift your business to new heights with our digital marketing services.</p>
    </div>
</section>

<div class="container py-5 d-flex justify-content-center">
    <div class="card shadow p-4 w-100" style="max-width: 500px;">
        <h4 class="text-center mb-4">Service Payment</h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('ccavenue.pay') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Amount (e.g. 1000.00)</label>
                <input type="number" name="amount" step="0.01" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Currency</label>
                <select name="currency" class="form-select" required>
                    <option value="INR">INR (₹)</option>
                    <option value="USD">USD ($)</option>
                    <option value="CAD">CAD (C$)</option>
                    <option value="AUD">AUD (A$)</option>
                    <option value="GBP">GBP (£)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Pay Now</button>
        </form>
    </div>
</div>
@endsection
