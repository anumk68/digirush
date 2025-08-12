@extends('layouts.new-admin.app')
@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h5 class="mb-0">Seo Details</h5>
                    <a href="{{ route('seo-manage-index') }}" class="btn btn-primary ms-auto">Back to List</a>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Name:</strong></h6>
                        <p>{{ $data->fname }}</p>
                         <div class="col-md-6">
                        <h6 class="mb-1"><strong>Name:</strong></h6>
                        <p>{{ $data->lname }}</p>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Email:</strong></h6>
                        <p>{{ $data->email }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>City:</strong></h6>
                        <p>{{ $data->city }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Mobile No.:</strong></h6>
                        <p>{{ $data->phone_no }}</p>
                    </div>
                    <div class="col-md-12">
                        <h6 class="mb-1"><strong>Website URL:</strong></h6>
                        <p>{{ $data->services }}</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
