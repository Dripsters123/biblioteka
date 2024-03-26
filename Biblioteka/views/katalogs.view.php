<h2>Ir pieejama</h2>
<ul>
    <?php foreach ($posts as $post) { 
        if($post["available"] == 1) { ?>
            <li>
                <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
            </li>
        <?php } 
    } ?>
</ul>

<h2>Nav pieejama </h2>
<ul>
    <?php foreach ($posts as $post) { 
        if($post["available"] != 1) { ?>
            <li>
                <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
            </li>
        <?php } 
    } ?>
</ul>
