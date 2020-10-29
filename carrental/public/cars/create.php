<?php require __DIR__ . '/../header.php'; ?>
<main>
    <h2>Create new car</h2>
    <form method="post" action="../../backend/controllers/carsController.php">
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" id="model">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="color" name="color" id="color">
        </div>
        <div class="form-group">
            <label for="license_plate">License Plate</label>
            <input type="text" name="license_plate" id="license_plate">
        </div>
        <div class="form-group">
            <label for="categories_id">Category id</label>
            <input type="number" name="categories_id" id="categories_id">
        </div>
        <input type="hidden" name="formType" value="create">
        <input type="submit" value="Create">
    </form>
</main>
<?php require __DIR__ . '/../footer.php'; ?>