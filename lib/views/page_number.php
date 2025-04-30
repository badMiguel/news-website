<?php

$display = "";

if (isset($_GET["display"])) {
    $display = "&display={$_GET["display"]}";
}

?>

<?php if ($currentPage !== 1): ?>
    <p><a href="?page=<?= $currentPage - 1 . $display ?>">Prev</a></p>
<?php endif ?>

<p><a href="?page=1<?= $display ?>">1</a></p>

<?php for ($i = $pageStart; $i < $pageEnd + 1; $i++): ?>
    <?php if ($i > 1 && $i < $totalPages) : ?>
        <p><a href="?page=<?= $i . $display ?>"><?= $i ?></a></p>
    <?php endif ?>
<?php endfor ?>

<?php if ($totalPages > 1): ?>
    <p><a href="?page=<?= $totalPages . $display ?>"><?= $totalPages ?></a></p>
<?php endif; ?>

<?php if ($currentPage !== $totalPages): ?>
    <p><a href="?page=<?= $currentPage + 1 . $display ?>">Next</a></p>
<?php endif ?>
