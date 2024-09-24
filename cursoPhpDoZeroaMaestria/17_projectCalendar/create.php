<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Adicionar contato</h1>
        <form id="create-form" action="<?= $BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome do contato" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o telefone do contato" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações</label>
                <textarea name="observations" id="observations" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    
<?php
include_once("templates/footer.php");
?>