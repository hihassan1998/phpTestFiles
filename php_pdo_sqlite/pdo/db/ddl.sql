-- SQL to create a sample database in SQLite
-- Ensure the database is created with a specified name.

-- Start SQLite using:
--   sqlite3 -column -header users.sqlite < ddl.sqlite

-- DROP TABLE if it already exists to avoid errors
DROP TABLE IF EXISTS users;

-- CREATE TABLE statement to create the 'users' table
CREATE TABLE example_table (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    age INTEGER
);
