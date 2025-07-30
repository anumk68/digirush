@extends('layouts.new-admin.app')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Hire Developers List</h5>
                </div>

                <form id="bulk-delete-form" method="POST" action="{{ route('bulk_delete_hire') }}">
                    @csrf
                    @method('DELETE')

                   

                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Mobile No.</th>
                                    <th>Website Url</th>
                                    <th>Created date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $blog)
                                <tr>
                                    <td><input type="checkbox" class="row-checkbox" data-id="{{ $blog->id }}"></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->fname }}</td>
                                    <td>{{ $blog->email }}</td>
                                    <td>{{ $blog->city }}</td>
                                    <td>{{ $blog->mobile_number }}</td>
                                    <td><a href="{{ $blog->url }}">{{ $blog->url }}</a></td>
                                    <td>{{ $blog->created_at }}</td>
                                    <td>
                                        <form action="{{ route('destroy_hire', $blog->id) }}" method="POST" class="delete-form" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-danger border-0 bg-transparent" data-bs-toggle="tooltip" title="Delete">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3 d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-danger mb-3" id="bulk-delete-btn" disabled>Delete Selected</button>
                        <div class="form-check">
                            <input type="checkbox" id="select-all-global" class="form-check-input">
                            <label for="select-all-global" class="form-check-label">Select all entries across all pages</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectAll = document.getElementById('select-all');
        const selectAllGlobal = document.getElementById('select-all-global');
        const checkboxes = document.querySelectorAll('.row-checkbox');
        const bulkDeleteBtn = document.getElementById('bulk-delete-btn');
        const form = document.getElementById('bulk-delete-form');
        let globalSelectedIds = new Set();

        checkboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                const id = this.dataset.id;
                this.checked ? globalSelectedIds.add(id) : globalSelectedIds.delete(id);
                toggleDeleteButton();
            });
        });

        selectAll.addEventListener('change', function () {
            checkboxes.forEach(cb => {
                cb.checked = this.checked;
                const id = cb.dataset.id;
                this.checked ? globalSelectedIds.add(id) : globalSelectedIds.delete(id);
            });
            toggleDeleteButton();
        });

        selectAllGlobal.addEventListener('change', function () {
            if (!this.checked) {
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

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            if (globalSelectedIds.size === 0) {
                Swal.fire("Error", "No records selected!", "error");
                return;
            }

            form.querySelectorAll('input[name="ids[]"]').forEach(el => el.remove());

            globalSelectedIds.forEach(id => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'ids[]';
                input.value = id;
                form.appendChild(input);
            });

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
