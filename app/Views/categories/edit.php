<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <h2>Edit Category</h2>

    <form action="<?= site_url('category/update/' . $category['id']) ?>" method="post">
        <label for="kategori_kode">Category Code:</label>
        <input type="text" name="kategori_kode" value="<?= $category['kategori_kode'] ?>" required>

        <label for="kategori_name">Category Name:</label>
        <input type="text" name="kategori_name" value="<?= $category['kategori_name'] ?>" required>

        <input type="submit" value="Update Category">
    </form>

<?= $this->endSection() ?>
