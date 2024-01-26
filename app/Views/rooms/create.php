<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Create Room</h5>
        <div class="card">
        <div class="card-body">
            <form action="<?= site_url('rooms/store') ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Room Name:</label>
                <input name="room_name" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

<?= $this->endSection() ?>
