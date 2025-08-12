@extends('layouts.new-admin.app')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Contact Management</h5>
                    </div>

                    <form id="bulk-delete-form" method="POST" action="{{ route('contact.bulk-delete') }}">
                        @csrf
                        @method('DELETE')
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="select-all"></th>
                                        <th>Sr No.</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Mobile No.</th>
                                        <th>Services</th>
                                        <th>Created date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $blog)
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox" data-id="{{ $blog->id }}"></td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $blog->firstname }}</td>
                                            <td>{{ $blog->lastname }}</td>
                                            <td>{{ $blog->email }}</td>
                                            <td>{{ $blog->city }}</td>
                                            <td>{{ $blog->mobile_number }}</td>
                                            <td>{{ $blog->services }}</td>
                                            <td>{{ $blog->created_at }}</td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                    <a href="{{ route('contact-view', $blog->id) }}" target="_blank"
                                                        class="text-primary" data-bs-toggle="tooltip" title="Views"><i
                                                            class="bi bi-eye-fill"></i></a>
                                                    <!-- <form action="{{ route('contact.delete', $blog->id) }}" method="POST"
                                                                                                        class="delete-form" style="display:inline;">
                                                                                                        @csrf
                                                                                                        @method('DELETE')
                                                                                                        <button type="submit" class="text-danger border-0 bg-transparent"
                                                                                                            data-bs-toggle="tooltip" title="Delete"><i
                                                                                                                class="bi bi-trash-fill"></i></button>
                                                                                                    </form> -->
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm single-delete-btn text-danger border-0 bg-transparent"
                                                        data-id="{{ $blog->id }}"
                                                        data-url="{{ route('contact.delete', $blog->id) }}"> <i
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
        </div>
    </div>

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
                        fetch("{{ route('contact.bulk-delete') }}", {
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