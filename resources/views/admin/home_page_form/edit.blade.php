@extends('layouts.adminapp')

@section('content')
<div class="page-wrapper">
<div class="page-content">
    <div class="container">
        <h1>Edit Submission</h1>
        <form action="{{ route('homePageSubmissions.update', $submission->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname', $submission->fname) }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $submission->email) }}" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $submission->city) }}" required>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="number" name="number" value="{{ old('number', $submission->number) }}" required>
            </div>
            <div class="mb-3">
                <label for="services" class="form-label">Services</label>
                <input type="text" class="form-control" id="services" name="services" value="{{ old('services', $submission->services) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Submission</button>
        </form>
    </div>
</div>
</div>
@endsection
