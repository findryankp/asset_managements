<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Create Category</h5>
        <div class="card">
        <div class="card-body">
            <form action="<?= site_url('category/update/' . $category['id']) ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category Code:</label>
                <input value="<?= $category['kategori_kode'] ?>" type="text" name="kategori_kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Category Name:</label>
                <input value="<?= $category['kategori_name'] ?>" name="kategori_name" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

<?= $this->endSection() ?>
