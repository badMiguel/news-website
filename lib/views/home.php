<?php if ($latestNews === null): ?>
    <p>There are currently no news.</p>
<?php else: ?>
    <h2>Just In</h2>
    <div class="top-news--container">
        <h1 class="top-news--title"><a href="/news?id=<?= htmlspecialchars($latestNews[0]["news_id"]) ?>"><?= htmlspecialchars($latestNews[0]["news_title"]) ?></a></h1>
        <div class="top-news--details">
            <p><?= htmlspecialchars($latestNews[0]["news_subtitle"]) ?></p>
            <br>
            <?php if ($latestNews[0]["author"]): ?>
                <p>Author: <?= htmlspecialchars($latestNews[0]["author"]) ?></p>
            <?php endif; ?>
            <div class="category--container">
                <p>Category:</p>
                <?php foreach ($latestNews[0]["category"] as $category): ?>
                    <p><?= $category ?></p>
                <?php endforeach; ?>
            </div>
            <p>Created: <em><?= htmlspecialchars($latestNews[0]["created_date"]) ?></em></p>
            <p>Edited: <em><?= htmlspecialchars($latestNews[0]["edited_date"]) ?></em></p>
        </div>
    </div>
<?php endif ?>

<?php foreach ($recentNewsPerCategory as $newsListKey => $newsList): ?>
    <?php if (count($newsList) > 1): ?>
        <h1><?= htmlspecialchars($newsListKey) ?></h1>
        <?php foreach ($newsList as $news): ?>
            <div class='news-card'>
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
        <?php endforeach; ?>
        <hr>
    <?php endif; ?>
<?php endforeach; ?>
