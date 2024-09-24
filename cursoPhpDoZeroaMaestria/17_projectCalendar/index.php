<?php
include_once("templates/header.php");
?>
<div class="container">
    <?php if(isset($printMsg) && $printMsg != ""): ?>
        <p id="msg"><?= $printMsg ?></p>
        <script>
            // Hide the message after 5seconds
            setTimeout(function() {
                document.getElementById("msg").style.display = "none";
            }, 5000);
        </script>
        <!-- Clean the msg from the session -->
        <?php unset($_SESSION["msg"]); ?>
    <?php endif; ?>
    <h1 id="main-title">Agenda</h1>
    <?php if (count($contacts) == 0): ?>
        <p id="empty-list-text">
            Não há contatos cadastrados em sua agenda,
            <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.
        </p>

    <?php else: ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col" class="col-id">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td scope="row" class="col-id"><?= $contact["id"] ?></td>
                        <td scope="row"><?= $contact["name"] ?></td>
                        <td scope="row"><?= $contact["phone"] ?></td>
                        <td class="actions">
                            <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>">
                                <i class="fas fa-eye check-icon"></i>
                            </a>
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"]?>">
                                <i class="far fa-edit edit-icon"></i>
                            </a>
                            <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php?id=<?= $contact["id"] ?>" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                <button type="submit" class="delete-btn">
                                    <i class="fas fa-times delete-icon"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    <?php endif; ?>

</div>




<?php
include_once("templates/footer.php");
?>