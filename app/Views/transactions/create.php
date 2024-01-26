<!-- app/Views/transactions/create.php -->

<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Create Transaction</h5>
        <div class="card-body">
            <form action="<?= site_url('transaction/store') ?>" method="post">
                <!-- Category -->
                <label for="category_id">Category:</label>
                <select class="form-control mb-3" name="category_id" required>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['kategori_name'] ?></option>
                    <?php endforeach; ?>
                </select>

                <!-- Room -->
                <label for="room_id">Room:</label>
                <select class="form-control mb-3" name="room_id" required>
                    <?php foreach ($rooms as $room): ?>
                        <option value="<?= $room['id'] ?>"><?= $room['room_name'] ?></option>
                    <?php endforeach; ?>
                </select>

                <!-- Location -->
                <label for="location_id">Location:</label>
                <select class="form-control mb-3" name="location_id" required>
                    <?php foreach ($locations as $location): ?>
                        <option value="<?= $location['id'] ?>"><?= $location['location_name'] ?></option>
                    <?php endforeach; ?>
                </select>

                <!-- Product -->
                <label for="product_id">Product:</label>
                <select class="form-control mb-3" name="product_id" required>
                    <?php foreach ($products as $product): ?>
                        <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
                    <?php endforeach; ?>
                </select>

                <!-- Tanggal Perolehan -->
                <label for="tanggal_perolehan">Tanggal Perolehan:</label>
                <input class="form-control mb-3" type="date" name="tanggal_perolehan" required>

                <!-- Penyusutan -->
                <label for="penyusutan">Penyusutan:</label>
                <input class="form-control mb-3" type="text" name="penyusutan" required>

                <!-- Bulan Berjalan RP -->
                <label for="bulan_berjalan_rp">Bulan Berjalan RP:</label>
                <input readonly class="form-control mb-3" type="text" name="bulan_berjalan_rp" required>

                <!-- Harga Perolehan -->
                <label for="harga_perolehan">Harga Perolehan:</label>
                <input class="form-control mb-3" type="text" name="harga_perolehan" required>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('addJS') ?>
<script>
    $(document).ready(function() {
        // Function to calculate bulan_berjalan_rp and round to the nearest thousand
        function calculateBulanBerjalanRp() {
            var hargaPerolehan = parseFloat($('[name="harga_perolehan"]').val()) || 0;
            var penyusutan = parseFloat($('[name="penyusutan"]').val()) || 0;

            // Perform the calculation and round to the nearest thousand
            var bulanBerjalanRp = Math.round(hargaPerolehan / penyusutan);

            // Update the value in the input field
            $('[name="bulan_berjalan_rp"]').val(bulanBerjalanRp);
        }

        // Call the function when harga_perolehan or penyusutan changes
        $('[name="harga_perolehan"], [name="penyusutan"]').on('input', calculateBulanBerjalanRp);
    });
</script>
<?= $this->endSection() ?>


