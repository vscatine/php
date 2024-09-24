<?php
    include_once("db.php");
    include_once("dao/CarDAO.php");

    $carDao = new CarDAO($conn);
    $cars = $carDao->findAll();
?>

<h1>Insira um carro</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca</label>
        <input type="text" name="brand" placeholder="Ford">
    </div>
    <div>
        <label for="km">Quilometragem</label>
        <input type="text" name="km" placeholder="15000">
    </div>
    <div>
        <label for="color">Cor</label>
        <input type="text" name="color" placeholder="Cinza chumbo">
    </div>
    <input type="submit" value="Salvar">
</form>
<ul>
    <?php foreach($cars as $car): ?>
        <li>
            <?= $car->getId()?> - <?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?>
        </li>
    <?php endforeach; ?>
</ul>

