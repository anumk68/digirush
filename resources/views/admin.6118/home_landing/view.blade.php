@extends('layouts.new-admin.app')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h5 class="mb-0">Home Details</h5>
                    <a href="{{ route('home-manage-index') }}" class="btn btn-primary ms-auto">Back to List</a>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Name:</strong></h6>
                        <p>{{ $data->fname }}</p>
                         <div class="col-md-6">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Email:</strong></h6>
                        <p>{{ $data->email }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-1"><strong>Mobile No.:</strong></h6>
                        <p>{{ $data->phone }}</p>
                    </div>
                    <div class="col-md-12">
                        <h6 class="mb-1"><strong>Website URL:</strong></h6>
                        <p>{{ $data->message }}</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
