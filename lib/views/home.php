<?php if (count($currNewsList) < 1): ?>
    <p>There are currently no news.</p>
<?php elseif ($startCount === 1): ?>
    <div class="top-news--container">
        <h1 class="top-news--title"><a href="/news?id=<?= $currNewsList[0]["news_id"] ?>"><?= $currNewsList[0]["news_title"] ?></a></h1>
        <div class="top-news--details">
            <p><?= $currNewsList[0]["news_subtitle"] ?></p>
            <br>
            <?php if ($currNewsList[0]["author"]): ?>
                <p>Author: <?= $currNewsList[0]["author"] ?></p>
            <?php endif; ?>
            <p>Created: <em><?= $currNewsList[0]["created_date"] ?></em></p>
            <p>Edited: <em><?= $currNewsList[0]["edited_date"] ?></em></p>
        </div>
    </div>
<?php endif ?>

<?php require VIEWS . "news_amount.php" ?>

<?php if (count($currNewsList) > 1): ?>
    <?php for ($i = $startCount; $i < count($currNewsList); $i++): ?>
        <div class='news-card'>
            <h2><a href="/news?id=<?= $currNewsList[$i]["news_id"] ?>"><?= $currNewsList[$i]["news_title"] ?></a></h2>
            <p><?= $currNewsList[$i]["news_subtitle"] ?></p>
            <br>
            <?php if ($currNewsList[$i]["author"]): ?>
                <p>Author: <?= $currNewsList[$i]["author"] ?></p>
            <?php endif; ?>
            <p>Created: <em><?= $currNewsList[$i]["created_date"] ?></em></p>
            <p>Edited: <em><?= $currNewsList[$i]["edited_date"] ?></em></p>
        </div>
        <hr>
    <?php endfor; ?>
<?php endif; ?>

<?php require VIEWS . "page_number.php" ?>
