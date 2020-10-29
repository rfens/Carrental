<?php require __DIR__ . '/../header.php';
    $id = $_GET['id'];
    $car = selectOne("SELECT * FROM cars WHERE id = :id", [
    ':id' => $id
    ]);
?>
    <main>
        <h2>Edit car</h2>
        <form method="post" action="../../backend/controllers/carsController.php">
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" name="brand" id="brand" value="<?=$car['brand']?>">
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" value="<?=$car['model']?>">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="color" name="color" id="color" value="<?=$car['color']?>">
            </div>
            <div class="form-group">
                <label for="license_plate">License Plate</label>
                <input type="text" name="license_plate" id="license_plate" value="<?=$car['license_plate']?>">
            </div>
            <div class="form-group">
                <label for="categories_id">Category id</label>
                <input type="number" name="categories_id" id="categories_id" value="<?=$car['categories_id']?>">
            </div>
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="formType" value="edit">
            <input type="submit" value="edit">
        </form>
    </main>
<?php require __DIR__ . '/../footer.php'; ?>