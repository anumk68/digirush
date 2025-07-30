@extends('layouts.new-admin.app')

@section('content')
<main class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dynamic</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Dynamic Page List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('dynamic.create') }}"><button type="button" class="btn btn-primary">Create</button></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Dynamic Pages</h5>
            </div>
            <div class="table-responsive mt-3">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Slug</th>
                            <th>Banner</th>
                            <th>First Section Image</th>
                            <th>Status</th>
                            <th>Created date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sr =  1;
                        @endphp
                        @foreach ($dynamics as $dynamic)
                        
                        <tr>
                            <td>{{ $sr++ }}.</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                        <p class="mb-0">{{ $dynamic->slug }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <img src="{{ asset('public/'. $dynamic->banner) }}" alt="" style="height:100px;width:100px;">
                            </td>
                            <td>
                                <img src="{{ asset('public/'. $dynamic->first_section_image) }}" alt="" style="height:100px;width:100px;">
                            </td>
                            <td>
                               {{ $dynamic->status == '1' ? 'active' : 'inactive' }}
                            </td>
                            <td>
                                {{ date('d M, Y',strtotime($dynamic->created_at)) }}
                            </td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="{{ route('dynamic.edit',$dynamic->id) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('dynamic.delete',$dynamic->id) }}" method="POST" class="delete-form" style="display:inline;">
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
