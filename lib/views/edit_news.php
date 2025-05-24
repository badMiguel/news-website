<h2>Edit News</h2>
<?php
session_start();
if (isset($_SESSION['newsEditStatus'])) {
    if ($_SESSION['newsEditStatus']) {
        echo "<p style='color: green;'>News updated successfully!</p>";
    } else {
        echo "<p style='color: red;'>Please fill in.</p>";
    }
    unset($_SESSION['newsEditStatus']);
}
session_write_close();
?>

<form method="POST" action="/news/edit/submit" enctype="multipart/form-data">
    <input type="hidden" name="news_id" value="<?php echo htmlspecialchars($newsDetails[0]['news_id']); ?>">

    <label for="news_title">Title: </label>
    <input type="text" name="news_title" value="<?php echo htmlspecialchars($newsDetails[0]['news_title']); ?>" required>

    <label for="news_subtitle">Summary: </label>
    <textarea name="news_subtitle" required><?php echo htmlspecialchars($newsDetails[0]['news_subtitle']); ?></textarea>

    <label for="body">Body: </label>
    <textarea name="body" required><?php echo htmlspecialchars($newsDetails[0]['body']); ?></textarea>

    <?php if (htmlspecialchars($newsDetails[0]["image_path"])): ?>
        <img src="/../images/<?= htmlspecialchars($newsDetails[0]['image_path']) ?>" />
    <?php endif ?>
    <label for="image">Select Image:</label>
    <input type="file" name="image" accept="image/*" />

    <p>Category:</p>
    <?php foreach ($categoryList as $c): ?>
        <label>
            <input
                type="checkbox"
                name="category[]"
                <?php if (in_array($c["category"], $newsDetails[0]['category'])): ?>
                checked
                <?php endif ?>
                value="<?= htmlspecialchars(lcfirst($c["category_id"])) ?>" />
            <?= $c["category"] ?>
        </label>
    <?php endforeach ?>

    <button type="submit">Update News</button>
</form>
