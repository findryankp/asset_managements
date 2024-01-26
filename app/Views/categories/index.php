<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <h2>Categories</h2>

    <a href="<?= site_url('category/create') ?>">Add Category</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Category Code</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['kategori_kode'] ?></td>
                <td><?= $category['kategori_name'] ?></td>
                <td>
                    <a href="<?= site_url('category/edit/' . $category['id']) ?>">Edit</a>
                    <a href="<?= site_url('category/delete/' . $category['id']) ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

<?= $this->endSection() ?>
