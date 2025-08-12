@extends('layouts.new-admin.app')
@section('content')


  <main class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Categories</li>
      </ol>
      </nav>
    </div>

    </div>
    <div class="card">
    <div class="card-header py-3">
      <h6 class="mb-0">Add Product Category</h6>
    </div>
    <div class="card-body">
      <div class="row">
      <div class="col-12 col-lg-4 d-flex">
        <div class="card border shadow-none w-100">
        <div class="card-body">
          <form action="{{route('blog-category.store')}}" method="POST" class="row g-3">
          @csrf
          <div class="col-12">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="category_name" placeholder="Category name" required>
          </div>
          <div class="col-12">
            <label class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="Slug name">
          </div>


          <div class="col-12">
            <div class="d-grid">
            <button class="btn btn-primary">Add Category</button>
            </div>
          </div>
          </form>

        </div>
        </div>
      </div>

      <div class="col-12 col-lg-8 d-flex">
        <div class="card border shadow-none w-100">
        <div class="card-body">
          <form id="bulk-delete-form" method="POST" action="{{ route('blog_category.bulk-delete') }}">
          @csrf
          @method('DELETE')
          <div class="table-responsive">
            <table class="table align-middle" id="example">
            <thead class="table-light">
              <tr>
              <th><input type="checkbox" id="select-all"></th>
              <th>ID</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($categories as $key => $categorie)

          <tr>
          <td><input type="checkbox" class="row-checkbox" data-id="{{ $categorie->id }}"></td>
          <td>{{ $key + 1 }}</td>
          <td>{{ $categorie->category_name }}</td>
          <td>{{ $categorie->slug }}</td>
          <td>
          <div class="d-flex align-items-center gap-3 fs-6">
          <a href="{{route('blog-category.edit', $categorie->id)}}" class="text-warning"
            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
            data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>

          <button type="button"
            class="btn btn-danger btn-sm single-delete-btn text-danger border-0 bg-transparent"
            data-id="{{ $categorie->id }}"
            data-url="{{ route('blog-category.destroy', $categorie->id) }}"><i
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
      </div><!--end row-->
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
      order: [
      [1, 'asc']
      ],
      pageLength: 10,
      columnDefs: [{
      orderable: false,
      targets: [0, 1]
      }]
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
      const rows = table.rows({
      page: 'current'
      }).nodes();
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
        fetch("{{ route('blog_category.bulk-delete') }}", {
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