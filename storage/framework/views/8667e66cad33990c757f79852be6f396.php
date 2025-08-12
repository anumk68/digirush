

<?php $__env->startSection('content'); ?>
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
                    <a href="<?php echo e(route('header.create')); ?>"><button type="button" class="btn btn-primary">Create</button></a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0">Header Pages</h5>
                </div>

                <!-- Bulk Delete Form -->
                <form id="bulk-delete-form" method="POST" action="<?php echo e(route('header.bulk-delete')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <div class="table-responsive mt-3">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select-all"></th>
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
                                <?php
                                    $sr = 1;
                                ?>
                                <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><input type="checkbox" class="row-checkbox" data-id="<?php echo e($header->id); ?>"></td>
                                        <td><?php echo e($sr++); ?>.</td>
                                        <td>
                                            <?php if($header->type == 'header'): ?>
                                                <p class="text-success fw-bold"><?php echo e(ucfirst($header->type)); ?></p>
                                            <?php elseif($header->type == 'sub-header'): ?>
                                                <p class="text-danger fw-bold"><?php echo e(ucfirst($header->type)); ?></p>
                                            <?php elseif($header->type == NULL): ?>
                                                <p class="text-danger fw-bold">Sub-Header</p>
                                            <?php else: ?>
                                                <p class="text-danger fw-bold"><?php echo e(ucfirst($header->type)); ?></p>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($header->title); ?>

                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                <div class="text-wrap" style="min-width: 150px; max-width: 200px;">
                                                    <p class="mb-0">
                                                        <?php echo e($header->slug); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="<?php echo e(asset('public/' . $header->icon)); ?>" alt=""
                                                style="height:100px;width:100px;">
                                        </td>
                                        <td>
                                            <?php echo e($header->status == '0' ? 'Inactive' : 'Active'); ?>

                                        </td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="<?php echo e(route('header.status.update', $header->id)); ?>" class="text-primary"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update Status"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <!-- <form action="<?php echo e(route('header.delete', $header->id)); ?>" method="POST"
                                                                                    class="delete-form" style="display:inline;">
                                                                                    <?php echo csrf_field(); ?>
                                                                                    <?php echo method_field('DELETE'); ?>
                                                                                    <button type="submit" class="text-danger border-0 bg-transparent"
                                                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                                                        <i class="bi bi-trash-fill"></i>
                                                                                    </button>
                                                                                </form> -->
                                                <button type="button"
                                                    class="btn btn-danger btn-sm single-delete-btn text-danger border-0 bg-transparent"
                                                    data-id="<?php echo e($header->id); ?>"
                                                    data-url="<?php echo e(route('header.delete', $header->id)); ?>"><i
                                                        class="bi bi-trash-fill" style="pointer-events: none;"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('heads'); ?>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
                        formData.append('_token', '<?php echo e(csrf_token()); ?>');
                        globalSelectedIds.forEach(id => formData.append('ids[]', id));
                        fetch("<?php echo e(route('header.bulk-delete')); ?>", {
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
                            csrfInput.value = '<?php echo e(csrf_token()); ?>';
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.new-admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/admin/header/index.blade.php ENDPATH**/ ?>