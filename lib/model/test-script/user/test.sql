.header on
.mode column

SELECT * FROM user;

UPDATE user SET privilege = 2 WHERE user_name = 'Bob';
UPDATE user SET full_name = 'Bob Bobby' WHERE user_name = 'Bob';

DELETE FROM user WHERE user_id = 2;

SELECT * FROM user;
