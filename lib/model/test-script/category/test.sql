.header on
.mode column

SELECT * FROM category;

UPDATE category SET category = 'Updated2' WHERE category_id = 1;
UPDATE category SET category = 'Updated3' WHERE category_id = 2;

DELETE FROM category WHERE category_id = 3;

SELECT * FROM category;
