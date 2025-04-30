<?php

$page = "";

if (isset($_GET["page"])) {
    $page = "?page={$_GET["page"]}";
}

?>

<p>Show by:</p>

<?php for ($i = 5; $i < 25; $i += 5) : ?>
    <?php if ($page !== ""): ?>
        <p><a href="<?= $page ?>&display=<?= $i ?>"><?= $i ?></a></p>
    <?php else: ?>
        <p><a href="?display=<?= $i ?>"><?= $i ?></a></p>
    <?php endif ?>
<?php endfor ?>
