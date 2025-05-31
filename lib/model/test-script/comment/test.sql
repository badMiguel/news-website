.header on
.mode column

SELECT * FROM comment;

UPDATE comment SET comment = 'Uhuh' WHERE comment_id = 1;
UPDATE comment SET commentor = 9 WHERE comment_id = 3;

DELETE FROM comment WHERE comment_id = 2;

SELECT * FROM comment;
