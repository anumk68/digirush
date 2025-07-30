@extends('layouts.new-admin.app')
@section('content')

          <main class="page-content">
              <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Home Inquery</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Home Inquery View</li>
                            </ol>
                        </nav>
                    </div>
                
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="mb-0">Seo Details</h5>
                            <a href="{{ route('home-index') }}" class="btn btn-primary ms-auto">Back to List</a>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-1"><strong>Name:</strong></h6>
                                <p>{{ $data->fname }}</p>
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
                                <p>{{ $data->number }}</p>
                            </div>
                            <div class="col-md-12">
                                <h6 class="mb-1"><strong>Website URL:</strong></h6>
                                <p>{{ $data->services }}</p>
                            </div>
                            <div class="col-md-12">
                                <h6 class="mb-1"><strong>Created Date:</strong></h6>
                                <p>{{ $data->created_at->format('d M Y, h:i A') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection
