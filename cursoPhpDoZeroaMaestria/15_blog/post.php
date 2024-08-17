<?php
include_once("templates/header.php");


if (isset($_GET['id'])) {
    $postIdGET = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postIdGET) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit nam assumenda quibusdam magni natus, eveniet corporis asperiores, reiciendis odio explicabo iusto voluptate commodi laudantium consequatur quae dolores sequi, necessitatibus labore.
            Alias facilis dolorem numquam quibusdam voluptatum molestias minima harum blanditiis, id molestiae vero qui asperiores, in ex vel amet unde non debitis quas laborum maxime? Numquam, quaerat. In, ratione optio.
            Similique ex possimus tempore explicabo accusantium, aliquam, ipsam rem, dicta cupiditate nulla ratione! Magni in necessitatibus fugit, eveniet sapiente eius, velit sit aspernatur ut, quibusdam facilis vitae non? Placeat, vero?
            Voluptatum reprehenderit suscipit laudantium, impedit minima nam. Provident, dolores! Reprehenderit, soluta a repudiandae, porro veritatis nisi, animi expedita velit aspernatur eaque nulla unde fugiat corporis natus consequuntur? Magnam, impedit assumenda.
            Similique quisquam quam, dolores ad veritatis expedita voluptatum ducimus reiciendis exercitationem sint quos earum illum tenetur ratione numquam vel saepe itaque doloremque quod quibusdam! At esse ut rerum voluptas omnis.
        </p>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit nam assumenda quibusdam magni natus, eveniet corporis asperiores, reiciendis odio explicabo iusto voluptate commodi laudantium consequatur quae dolores sequi, necessitatibus labore.
            Alias facilis dolorem numquam quibusdam voluptatum molestias minima harum blanditiis, id molestiae vero qui asperiores, in ex vel amet unde non debitis quas laborum maxime? Numquam, quaerat. In, ratione optio.
            Similique ex possimus tempore explicabo accusantium, aliquam, ipsam rem, dicta cupiditate nulla ratione! Magni in necessitatibus fugit, eveniet sapiente eius, velit sit aspernatur ut, quibusdam facilis vitae non? Placeat, vero?
            Voluptatum reprehenderit suscipit laudantium, impedit minima nam. Provident, dolores! Reprehenderit, soluta a repudiandae, porro veritatis nisi, animi expedita velit aspernatur eaque nulla unde fugiat corporis natus consequuntur? Magnam, impedit assumenda.
            Similique quisquam quam, dolores ad veritatis expedita voluptatum ducimus reiciendis exercitationem sint quos earum illum tenetur ratione numquam vel saepe itaque doloremque quod quibusdam! At esse ut rerum voluptas omnis.
            aoba</p>
    </div>
    <aside class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>