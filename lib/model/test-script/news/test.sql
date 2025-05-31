.header on
.mode column

SELECT * FROM news;

UPDATE news SET news_subtitle = 'Updated News Subtitle' WHERE news_id = 2;
UPDATE news SET image_path = '' WHERE news_id = 3;

DELETE FROM news WHERE news_id = 1;

SELECT * FROM news;
