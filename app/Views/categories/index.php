<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Categories</h5>
                <a class="btn btn-primary btn-sm" href="<?= site_url('category/create') ?>">Add Category</a>
                <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Category Code</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Category Name</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?= $category['id'] ?></h6></td>
                            <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-success rounded-3 fw-semibold"><?= $category['kategori_kode'] ?></span>
                            </div>
                            <td class="border-bottom-0">
                            <p class="mb-0 fw-normal"><?= $category['kategori_name'] ?></p>
                            </td>
                            </td>
                            <td class="border-bottom-0">
                            <a class="btn btn-sm btn-warning" href="<?= site_url('category/edit/' . $category['id']) ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="<?= site_url('category/delete/' . $category['id']) ?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>                   
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
