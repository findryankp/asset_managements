<!DOCTYPE html>
<html>
<head>
    <title>CRUD Tutorial with Sweet Alert - CodeIgniter 4</title>
    <!-- Include Sweet Alert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>

    <div>
        <?= $this->renderSection('content') ?>
    </div>

    <script>
        <?php if(session()->getFlashdata('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '<?= session()->getFlashdata('success') ?>',
            });
        <?php endif; ?>
    </script>

</body>
</html>
