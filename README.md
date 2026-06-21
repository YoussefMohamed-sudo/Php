# PHP Database Project

## Overview
This project contains PHP scripts with MySQL database connectivity.

## Files
- **db.php** - Database connection configuration and initialization

## Requirements
- PHP 7.0 or higher
- MySQL Server
- mysqli extension enabled

## Setup Instructions

### 1. Database Configuration
Edit `db.php` and update the following variables:
- `$host` - MySQL server address (default: localhost)
- `$user` - MySQL username (default: root)
- `$password` - MySQL password
- `$dbname` - Database name
- `$port` - MySQL port (default: NULL uses 3306)

### 2. Connection
The `db.php` file automatically connects to the database. Include it in your scripts:
```php
<?php
include 'db.php';
// Your code here
?>
```

## Error Handling
If the connection fails, the script will display an error message:
```
Connection failed: [error message]
```

## Security Notes
- Never commit database credentials to version control
- Use environment variables for sensitive data in production
- Consider using prepared statements to prevent SQL injection
