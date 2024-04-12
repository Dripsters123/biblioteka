<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h2>Ir pieejama</h2>
<ul>
    <?php foreach ($posts as $post) {
        if ($post["available"] == 1) { ?>
            <li>
                <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
                <form method="POST" action="/remove">
                    <button name="id" value="<?= $post['id'] ?>">Delete</button>
                </form>

                </form>
            </li>
    <?php }
    } ?>
</ul>

<h2>Nav pieejama </h2>
<ul>
    <?php foreach ($posts as $post) {
        if ($post["available"] != 1) { ?>
            <li>
                <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>


                </form>
            </li>
    <?php }
    } ?>
</ul>
<?php require "views/components/footer.php" ?>