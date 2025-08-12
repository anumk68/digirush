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
                    <a href="{{ route('dynamic.create') }}"><button type="button"
                            class="btn btn-primary">Create</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">Dynamic Pages</h5>
                </div>

                <!-- Bulk Delete Form -->
                <form id="bulk-delete-form" method="POST" action="{{ route('devPage.bulk-delete') }}">
                    @csrf
                    @method('DELETE')

                    <div class="table-responsive mt-3">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>Sr No.</th>
                                    <th>Slug</th>
                                    <th>Banner</th>
                                    <th>First Section Image</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Meta Keyword</th>
                                    <!-- <th>Status</th> -->
                                    <th>Created date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sr = 1;
                                @endphp
                                @foreach ($dynamics as $dynamic)

                                    <tr>
                                        <td><input type="checkbox" class="row-checkbox" data-id="{{ $dynamic->id }}"></td>
                                        <td>{{ $sr++ }}.</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                                    <p class="mb-0">{{ $dynamic->slug }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ asset('public/' . $dynamic->banner) }}" alt=""
                                                style="height:100px;width:100px;">
                                        </td>
                                        <td>
                                            <img src="{{ asset('public/' . $dynamic->first_section_image) }}" alt=""
                                                style="height:100px;width:100px;">
                                        </td>
                                        <td class="text-center">{{ Str::limit($dynamic->meta_title ?? '---', 30) }}</td>
                                        <td class="text-center">
                                            {{ Str::limit(strip_tags($dynamic->meta_description ?? '---'), 30) }}</td>
                                        <td class="text-center">{{ $dynamic->meta_keyword ?? '---' }}</td>
                                        <!-- <td>
                                                                            {{ $dynamic->status == '1' ? 'active' : 'inactive' }}
                                                                        </td> -->
                                        <td>
                                            {{ date('d M, Y', strtotime($dynamic->created_at)) }}
                                        </td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="{{ route('dynamic.edit', $dynamic->id) }}" class="text-primary"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <!-- <form action="{{ route('dynamic.delete', $dynamic->id) }}" method="POST"
                                                                                    class="delete-form" style="display:inline;">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="text-danger border-0 bg-transparent"
                                                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                                                        <i class="bi bi-trash-fill"></i>
                                                                                    </button>
                                                                                </form> -->
                                                <button type="button"
                                                    class="btn btn-danger btn-sm single-delete-btn text-danger border-0 bg-transparent"
                                                    data-id="{{ $dynamic->id }}"
                                                    data-url="{{ route('dynamic.delete', $dynamic->id) }}"><i
                                                        class="bi bi-trash-fill" style="pointer-events: none;"></i></button>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3 d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-danger mb-3" id="bulk-delete-btn" disabled>Delete
                            Selected</button>
                        <div class="form-check">
                            <input type="checkbox" id="select-all-global" class="form-check-input">
                            <label for="select-all-global" class="form-check-label">Select all entries across all
                                pages</label>
                        </div>
                    </div>
                </form>
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
        let globalSelectedIds = new Set();

        document.addEventListener('DOMContentLoaded', function () {
            const table = $('#example').DataTable({
                order: [[1, 'asc']],
                pageLength: 10,
                columnDefs: [
                    { orderable: false, targets: [0, 1] }
                ]
            });
            const bulkDeleteBtn = document.getElementById('bulk-delete-btn');
            const selectAll = document.getElementById('select-all');
            const selectAllGlobal = document.getElementById('select-all-global');
            function toggleDeleteButton() {
                bulkDeleteBtn.disabled = globalSelectedIds.size === 0;
            }
            function syncCheckboxes() {
                document.querySelectorAll('.row-checkbox').forEach(cb => {
                    cb.checked = globalSelectedIds.has(cb.dataset.id);
                });
                toggleDeleteButton();
            }
            table.on('draw', function () {
                syncCheckboxes();
            });
            document.addEventListener('change', function (e) {
                if (e.target.classList.contains('row-checkbox')) {
                    const id = e.target.dataset.id;
                    if (e.target.checked) {
                        globalSelectedIds.add(id);
                    } else {
                        globalSelectedIds.delete(id);
                    }
                    toggleDeleteButton();
                }
            });
            selectAll.addEventListener('change', function () {
                const rows = table.rows({ page: 'current' }).nodes();
                $('input.row-checkbox', rows).each(function () {
                    this.checked = selectAll.checked;
                    const id = this.dataset.id;
                    if (selectAll.checked) {
                        globalSelectedIds.add(id);
                    } else {
                        globalSelectedIds.delete(id);
                    }
                });
                toggleDeleteButton();
            });
            selectAllGlobal.addEventListener('change', function () {
                if (this.checked) {
                    table.rows().every(function () {
                        const checkbox = $(this.node()).find('.row-checkbox')[0];
                        if (checkbox) {
                            checkbox.checked = true;
                            globalSelectedIds.add(checkbox.dataset.id);
                        }
                    });
                } else {
                    table.rows().every(function () {
                        const checkbox = $(this.node()).find('.row-checkbox')[0];
                        if (checkbox) {
                            checkbox.checked = false;
                            globalSelectedIds.delete(checkbox.dataset.id);
                        }
                    });
                }
                toggleDeleteButton();
            });
            bulkDeleteBtn.addEventListener('click', function (event) {
                event.preventDefault();
                if (globalSelectedIds.size === 0) {
                    Swal.fire("Error", "No records selected!", "error");
                    return;
                }
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You are about to delete selected records!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete them!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const formData = new FormData();
                        formData.append('_method', 'DELETE');
                        formData.append('_token', '{{ csrf_token() }}');
                        globalSelectedIds.forEach(id => formData.append('ids[]', id));
                        fetch("{{ route('devPage.bulk-delete') }}", {
                            method: 'POST',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: formData
                        })
                            .then(response => {
                                if (!response.ok) throw new Error("Network error");
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    Swal.fire("Deleted!", data.message, "success").then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire("Error", data.message || "Deletion failed.", "error");
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                Swal.fire("Error", "Request failed.", "error");
                            });
                    }
                });
            });
            document.addEventListener('click', function (e) {
                if (e.target.classList.contains('single-delete-btn')) {
                    e.preventDefault();
                    const deleteUrl = e.target.dataset.url;
                    const itemId = e.target.dataset.id;
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'This will permanently delete the record.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = deleteUrl;
                            const csrfInput = document.createElement('input');
                            csrfInput.type = 'hidden';
                            csrfInput.name = '_token';
                            csrfInput.value = '{{ csrf_token() }}';
                            form.appendChild(csrfInput);
                            const methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.value = 'DELETE';
                            form.appendChild(methodInput);
                            document.body.appendChild(form);
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>
@endsection