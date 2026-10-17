# lexical

PHP/MySQL practice project.

## Setup

1. After cloning the repo, create a MySQL database and the `users` table:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(32) NOT NULL UNIQUE,
  email VARCHAR(255) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  registration_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
```

2. Include `db_config.php` in your project, and fill out your server information. Note that this file is already included in the `.gitignore`.

```php
<?php
$server_name = "";
$username = "";
$password = "";
$db_name = "";

$connection = mysqli_connect($server_name, $username, $password, $db_name);

if (!$connection) {
    die("connection failed. ");
}
```

3. Host the site on your server of choice.

## Requirements
- PHP 8.1+ (utilizes `mysqli::execute` with $params array).
