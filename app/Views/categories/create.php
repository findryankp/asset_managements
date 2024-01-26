<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <h2>Create Category</h2>

    <form action="<?= site_url('category/store') ?>" method="post">
        <label for="kategori_kode">Category Code:</label>
        <input type="text" name="kategori_kode" required>

        <label for="kategori_name">Category Name:</label>
        <input type="text" name="kategori_name" required>

        <input type="submit" value="Add Category">
    </form>

<?= $this->endSection() ?>
