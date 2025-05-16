<?php
if (count($currNewsList) < 1) {
    echo "<p>There are currently no news.</p>";
    exit;
}
?>

<?php require VIEWS . "news_amount.php" ?>

<?php foreach ($currNewsList as $news): ?>
    <div class='news--card'>
        <h2>
            <a href="/news?id=<?= htmlspecialchars($news["news_id"]) ?>">
                <?= htmlspecialchars($news["news_title"]) ?>
            </a>
        </h2>
        <p><?= htmlspecialchars($news["news_subtitle"]) ?></p>
        <br>
        <?php if ($news["author"]): ?>
            <p>Author: <?= htmlspecialchars($news["author"]) ?></p>
        <?php endif; ?>
        <div class="category--container">
            <p>Category:</p>
            <?php foreach ($news["category"] as $category): ?>
                <p><?= $category ?></p>
            <?php endforeach; ?>
        </div>
        <p>Created: <em><?= htmlspecialchars($news["created_date"]) ?></em></p>
        <p>Edited: <em><?= htmlspecialchars($news["edited_date"]) ?></em></p>
    </div>
    <hr>
<?php endforeach; ?>

<?php require VIEWS . "page_number.php" ?>
