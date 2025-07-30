@extends('layouts.new-admin.app')

@section('content')
<main class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Header</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Header Page List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('header.create') }}"><button type="button" class="btn btn-primary">Create</button></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Header Pages</h5>
            </div>
            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Type</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Icon</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sr =  1;
                        @endphp
                        @foreach ($headers as $header)
                        <tr>
                            <td>{{ $sr++ }}.</td>
                            <td>
                                @if($header->type == 'header')
                                <p class="text-success fw-bold">{{ ucfirst($header->type) }}</p>
                                @elseif($header->type == 'sub-header')
                                <p class="text-danger fw-bold">{{ ucfirst($header->type) }}</p>
                                @elseif($header->type == NULL)
                                <p class="text-danger fw-bold">Sub-Header</p>
                                @else
                                <p class="text-danger fw-bold">{{ ucfirst($header->type) }}</p>
                                @endif
                            </td>
                            <td>
                                {{ $header->title }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                        <p class="mb-0">
                                            {{ $header->slug }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <img src="{{ asset('public/'.$header->icon) }}" alt="" style="height:100px;width:100px;">
                            </td>
                            <td>
                               {{ $header->status == '0' ? 'Inactive' : 'Active' }}
                            </td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="{{ route('header.status.update',$header->id) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update Status"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('header.delete', $header->id ) }}" method="POST" class="delete-form" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger border-0 bg-transparent" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

@section('heads')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault(); 

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); 
                    }
                });
            });
        });
    });
</script>
@endsection
