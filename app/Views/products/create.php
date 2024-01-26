<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Create Product</h5>
        <div class="card">
        <div class="card-body">
            <form action="<?= site_url('products/store') ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Code:</label>
                <input type="text" name="product_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Product Name:</label>
                <input name="product_name" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

<?= $this->endSection() ?>
