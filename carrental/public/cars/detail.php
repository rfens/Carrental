<?php 
    require __DIR__ . '/../header.php'; 
    if (! isset($_GET['id']) ) {
        redirect('../index.php');
    }
    $id = $_GET['id'];
    $car = selectOne("SELECT * FROM cars WHERE id = :id", [
        ':id' => $id
    ]);

?>
<main>
    <h2>Car Details</h2>

    <table>
        <tr>
            <th>Brand</th>
            <td><?= $car['brand'] ?></td>
        </tr>

        <tr>
            <th>Model</th>
            <td><?= $car['model'] ?></td>
        </tr>

        <tr>
            <th>Color</th>
            <td><?= $car['color'] ?></td>
        </tr>

        <tr>
            <th>License Plate</th>
            <td><?= $car['license_plate'] ?></td>
        </tr>
    </table>

    <form action="../../backend/controllers/carsController.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="formType" value="delete">
        <input type="submit" value="X">
    </form>

    <a href="edit.php?id=<?=$id?>">Edit car</a>
</main>
<?php require __DIR__ . '/../footer.php'; ?>