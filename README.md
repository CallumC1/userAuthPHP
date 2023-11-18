What is this?

This is a template using PHP, MYSQLI and Tailwindcss to create a signup / login example.
This also uses PHP Sessions to keep track of the authenticated status.
Goal: The goal of this is to make it as secure as possible and as portable as possible.

SQL Commands

```
CREATE DATABASE phpUserAuth;

USE phpUserAuth;

CREATE TABLE users (
    user_id int PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    email varchar(150) NOT NULL UNIQUE,
    password_hash TEXT NOT NULL,
    user_roles VARCHAR(50) DEFAULT 'user' NOT NULL
);
```