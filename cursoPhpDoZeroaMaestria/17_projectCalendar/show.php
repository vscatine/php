<?php 
include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html") ?>
    <h1 id="main-title"><?= $contact['name'] ?></h1>
    <div>
        <h4>Telefone</h4>
        <p><?= $contact['phone'] ?></p>
    </div>
    <div>
        <h4>Observações</h4>
        <p><?= $contact['observations'] ?></p>
    </div>
</div>

<?php 
include_once("templates/footer.php");
?>