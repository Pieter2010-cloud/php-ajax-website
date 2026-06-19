CREATE DATABASE IF NOT EXISTS ajax;
USE ajax;
 
CREATE TABLE IF NOT EXISTS accounts (
  username varchar(50)  NOT NULL PRIMARY KEY,
  password varchar(255)  NOT NULL,
  name     varchar(100) NOT NULL,
  email    varchar(100) NOT NULL UNIQUE
);
 
CREATE TABLE IF NOT EXISTS opstelling (
  username varchar(20) NOT NULL PRIMARY KEY,
  score    int         NOT NULL,

  /* username in deze tabel verwijst naar de username in accounts: */
  FOREIGN KEY (username) REFERENCES accounts(username)
    ON DELETE CASCADE /* Als het account verwijderd wordt, verwijder ook de score */
    ON UPDATE CASCADE /* Als de username in accounts verandert, verander die dan ook in de tabel scores */
);