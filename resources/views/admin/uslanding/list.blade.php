
@extends('layouts.new-admin.app')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">Digital Management</h5>
                
                    </div>
                    <div class="table-responsive mt-3">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No.</th>
                                    <th>Services</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3 cursor-pointer">
                                            <div class="">
                                                <p class="mb-0">{{ $blog->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $blog->email }}</td>
                                    <td>{{ $blog->phone }}</td>
                                    <td>{{ $blog->message }}</td>
                                    <td>{{ $blog->created_at }}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="{{ route('us-view', $blog->id) }}" target="_blank" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" ><i class="bi bi-eye-fill"></i></a>
                                            <form action="{{ route('destroy_us_view', $blog->id) }}" method="POST" class="delete-form" style="display:inline;">
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
        </div>
    </div>

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




