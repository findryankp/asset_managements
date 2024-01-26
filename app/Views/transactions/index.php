<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
<div class="row">
        <div class="col-lg-4">
            <!-- Monthly Earnings -->
            <div class="card">
                <div class="card-body">
                <div class="row alig n-items-start">
                    <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Total Bulan Berjalan </h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                        <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                        </span>
                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                        <p class="fs-3 mb-0">last year</p>
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="d-flex justify-content-end">
                        <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-currency-dollar fs-6"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div id="earning"></div>
            </div>
        </div>
        <div class="col-lg-4">
        <!-- Monthly Earnings -->
            <div class="card">
                <div class="card-body">
                <div class="row alig n-items-start">
                    <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Total Harga Perolehan </h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                        <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                        </span>
                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                        <p class="fs-3 mb-0">last year</p>
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="d-flex justify-content-end">
                        <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-currency-dollar fs-6"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div id="earning"></div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Monthly Earnings -->
            <div class="card">
                <div class="card-body">
                <div class="row alig n-items-start">
                    <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Total Bulan Berjalan </h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                        <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                        </span>
                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                        <p class="fs-3 mb-0">last year</p>
                    </div>
                    </div>
                    <div class="col-4">
                    <div class="d-flex justify-content-end">
                        <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-currency-dollar fs-6"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div id="earning"></div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">All Transaction</h5>
                <a class="btn btn-primary btn-sm" href="<?= site_url('transaction/create') ?>">Add Transaction</a>
                <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Category</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Room</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Location</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Product Code</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Product</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tanggal</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Penyusutan</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Bulan Berjalan</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Harga Perolehan (Awal)</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transactions as $transaction): ?>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?= $transaction['id'] ?></h6></td>
                            <td class="border-bottom-0">
                                <?= $transaction['kategori_name'] ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $transaction['room_name'] ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $transaction['location_name'] ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $transaction['product_code'] ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $transaction['product_name'] ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $transaction['tanggal_perolehan'] ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $transaction['penyusutan'] ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $transaction['bulan_berjalan_rp'] ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $transaction['harga_perolehan'] ?>
                            </td>
                            <td class="border-bottom-0">
                            <a class="btn btn-sm btn-warning" href="<?= site_url('transaction/edit/' . $transaction['id']) ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="<?= site_url('transaction/delete/' . $transaction['id']) ?>">Delete</a>
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

