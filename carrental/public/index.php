<?php 
    require __DIR__ . './header.php'; 
    $cars = select("SELECT * FROM cars");
?>
<main>
    <section class="cars">
        <h2>Available cars</h2>
        <ul>
            <?php 
                foreach($cars as $car) {
                    echo "<li> 
                            <a href='./cars/detail.php?id={$car['id']}'> 
                                {$car['brand']} 
                            </a>
                        </li>";
                }
            ?>
        </ul> 
        <a href="./cars/create.php">Create new car</a>
    </section>

</main>
<?php require __DIR__ . './footer.php'; ?>