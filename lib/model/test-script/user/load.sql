-- Insert data into the user table
INSERT INTO user (user_name, full_name, hashed_password, salt, privilege) 
VALUES 
    ('Bob', 'Bob Bob', '$2y$12$N32/OfyPWIeR7elZNJ5SxumNrAx8mFms.mQi5Bc8fRAq87WWCw6ky', '5d18dc4fadff639e0dda3f36ffee9654', '0'),
    ('Alice', 'Alice Alice', '$2y$12$TUO8JccTeyeAz9tkKBq93eP3GrogCpDqbqd3EvtLpDf0vF1EH6YZK', '271b72001fb60a17d50d4ad26ff61422', '1'),
    ('Phil', 'Phil Phil', '$2y$12$P.9LVG8cB6iqDMeZXPNVUesAV1npg7ZsbhTs1jAzqb5DpFIgTL7Aq', 'fbf58898bf698b113800125184b14cd8', '2');
