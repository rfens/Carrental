<?php
require __DIR__ . '/../init.php';

if($_POST['formType'] == 'create') {
    // 1. $_POST data checken
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $license_plate = $_POST['license_plate'];
    $categories_id = $_POST['categories_id'];

    // 2a. checken of input aan voorwaarden voldoet.
    // 2b. data inserten in db
    query("INSERT INTO cars (brand, model, color, license_plate, categories_id) 
            VALUES (:brand, :model, :color, :license_plate, :categories_id)", [
                ':brand' => $brand,
                ':model' => $model,
                ':color' => $color,
                'license_plate' => $license_plate,
                'categories_id'   => $categories_id
            ]);


    // 3. redirect naar index.php met melding
    redirect('../../public/index.php');
} else if ($_POST['formType'] == 'delete') {
    // delete car

    query("DELETE FROM cars WHERE id = :id",[
        ':id' => $_POST['id']
    ]);
    redirect('../../public/index.php');
}  else if($_POST['formType'] == 'edit') {
    // edit exisiting car
    $id = $_POST['id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $license_plate = $_POST['license_plate'];
    $categories_id = $_POST['categories_id'];

    query("UPDATE cars SET
    brand = :brand,
    model = :model,
    color = :color,
    license_plate = :license_plate,
    categories_id = :categories_id
    WHERE id = :id",[
    ':brand' => $brand,
    ':model' => $model,
    ':color' => $color,
    ':license_plate' => $license_plate,
    ':categories_id' => $categories_id,
    ':id' => $id
    ]);
    redirect('../../public/detail.php?id='.$id);
}
