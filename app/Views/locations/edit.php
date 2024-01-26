<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Create Location</h5>
        <div class="card">
        <div class="card-body">
            <form action="<?= site_url('locations/update/' . $locations['id']) ?>" method="post">
            <div class="mb-3">
                <label for="room_id">Room:</label>
                <select class="form-control" name="room_id" required>
                    <?php foreach ($rooms as $room): ?>
                        <option value="<?= $room['id'] ?>" <?= ($room['id'] == $locations['room_id']) ? 'selected' : '' ?>>
                            <?= $room['room_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Location Code:</label>
                <input value="<?= $locations['location_code'] ?>" type="text" name="location_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Location Name:</label>
                <input value="<?= $locations['location_name'] ?>" name="location_name" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

<?= $this->endSection() ?>
