@extends('layouts.new-admin.app')

@section('content')
    <main class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Case Study</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Case Study List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('case.create') }}"><button type="button" class="btn btn-primary">Create</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">Case Study</h5>
                </div>

                <!-- Bulk Delete Form -->
                <form id="bulk-delete-form" method="POST" action="{{ route('case.bulk-delete') }}">
                    @csrf
                    @method('DELETE')
                    <div class="table-responsive mt-3">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>Sr No.</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Created date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cases as $case)
                                    <tr>
                                        <td><input type="checkbox" class="row-checkbox" data-id="{{ $case->id }}"></td>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ Str::limit($case->title, "23") }}</td>
                                        <td>{{ Str::limit($case->slug, 10) }}</td>
                                        <td>
                                            <img style="height:75px;width:75px;" src="{{ asset('public/' . $case->banner) }}"
                                                alt="digirush">
                                        </td>
                                        <td>
                                            <span class="text-success fw-bold">Active</span>
                                        </td>
                                        <td>{{ Str::limit($case->description ?? 'N/A', 30) }} </td>
                                        <td>{{ $case->created_at->format('d M ,Y') }}</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="{{ route('case.edit', $case->id) }}" class="text-primary"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i
                                                        class="bi bi-pencil-fill"></i>
                                                </a>
                                                <form action="{{ route('case.delete', $case->id) }}" method="POST"
                                                    class="delete-form" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-danger border-0 bg-transparent"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
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
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.delete-form').forEach(function (form) {
                form.addEventListener('submit', function (e) {
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectAll = document.getElementById('select-all');
            const selectAllGlobal = document.getElementById('select-all-global');
            const checkboxes = document.querySelectorAll('.row-checkbox');
            const bulkDeleteBtn = document.getElementById('bulk-delete-btn');
            const form = document.getElementById('bulk-delete-form');
            let globalSelectedIds = new Set();

            // Handle single checkbox change
            checkboxes.forEach(cb => {
                cb.addEventListener('change', function () {
                    const id = this.dataset.id;
                    if (this.checked) {
                        globalSelectedIds.add(id);
                    } else {
                        globalSelectedIds.delete(id);
                    }
                    toggleDeleteButton();
                });
            });

            // Handle Select All for current page
            selectAll.addEventListener('change', function () {
                checkboxes.forEach(cb => {
                    cb.checked = this.checked;
                    const id = cb.dataset.id;
                    if (this.checked) {
                        globalSelectedIds.add(id);
                    } else {
                        globalSelectedIds.delete(id);
                    }
                });
                toggleDeleteButton();
            });

            // Handle Select All Across Pages
            selectAllGlobal.addEventListener('change', function () {
                const checked = this.checked;
                if (!checked) {
                    globalSelectedIds.clear();
                    checkboxes.forEach(cb => cb.checked = false);
                } else {
                    checkboxes.forEach(cb => {
                        cb.checked = true;
                        globalSelectedIds.add(cb.dataset.id);
                    });
                }
                toggleDeleteButton();
            });

            function toggleDeleteButton() {
                bulkDeleteBtn.disabled = globalSelectedIds.size === 0;
            }

            // Handle form submit with confirmation
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                if (globalSelectedIds.size === 0) {
                    Swal.fire("Error", "No records selected!", "error");
                    return;
                }

                // Clear previous hidden inputs
                form.querySelectorAll('input[name="ids[]"]').forEach(el => el.remove());

                // Add selected IDs as hidden inputs
                globalSelectedIds.forEach(id => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'ids[]';
                    input.value = id;
                    form.appendChild(input);
                });

                // Confirm before submit
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You are about to delete selected records!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete them!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection