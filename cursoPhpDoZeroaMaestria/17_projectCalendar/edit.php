<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Editar contato</h1>
        <form id="edit-form" action="<?= $BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact["id"]?>">
            <div class="form-group">
                <label for="name">Nome do contato</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome do contato" required value="<?= $contact["name"]?>">
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o telefone do contato" required value="<?= $contact["phone"] ?>">
            </div>
            <div class="form-group">
                <label for="observations">Observações</label>
                <textarea name="observations" id="observations" class="form-control" rows="3"><?= $contact["observations"] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
    
<?php
include_once("templates/footer.php");
?>