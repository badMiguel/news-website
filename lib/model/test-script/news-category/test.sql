.header on
.mode column

SELECT * FROM news_category;

UPDATE news_category SET news_id = 4 WHERE news_id = 3;
UPDATE news_category SET category_id = 4 WHERE news_id = 1 AND category_id = 1;

DELETE FROM news_category WHERE news_id = 2;

SELECT * FROM news_category;
