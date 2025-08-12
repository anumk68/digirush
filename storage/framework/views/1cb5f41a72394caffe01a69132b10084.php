<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Hire Developers List</h5>
                    </div>

                    <form id="bulk-delete-form" method="POST" action="<?php echo e(route('bulk_delete_hire')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
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
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><input type="checkbox" class="row-checkbox" data-id="<?php echo e($blog->id); ?>"></td>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($blog->fname); ?></td>
                                            <td><?php echo e($blog->email); ?></td>
                                            <td><?php echo e($blog->city); ?></td>
                                            <td><?php echo e($blog->mobile_number); ?></td>
                                            <td><a href="<?php echo e($blog->url); ?>"><?php echo e($blog->url); ?></a></td>
                                            <td><?php echo e($blog->created_at); ?></td>
                                            <td>
                                                <!-- <form action="<?php echo e(route('destroy_hire', $blog->id)); ?>" method="POST" class="delete-form" style="display:inline;">
                                                                                    <?php echo csrf_field(); ?>
                                                                                    <?php echo method_field('DELETE'); ?>
                                                                                    <button type="submit" class="text-danger border-0 bg-transparent" data-bs-toggle="tooltip" title="Delete">
                                                                                        <i class="bi bi-trash-fill"></i>
                                                                                    </button>
                                                                                </form> -->
                                                <button type="button"
                                                    class="btn btn-danger btn-sm single-delete-btn text-danger border-0 bg-transparent"
                                                    data-id="<?php echo e($blog->id); ?>"
                                                    data-url="<?php echo e(route('destroy_hire', $blog->id)); ?>"><i
                                                        class="bi bi-trash-fill" style="pointer-events: none;"></i></button>
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
                        formData.append('_token', '<?php echo e(csrf_token()); ?>');
                        globalSelectedIds.forEach(id => formData.append('ids[]', id));
                        fetch("<?php echo e(route('bulk_delete_hire')); ?>", {
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
<?php echo $__env->make('layouts.new-admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\DigirushNew\resources\views/admin/hire_developers/list.blade.php ENDPATH**/ ?>