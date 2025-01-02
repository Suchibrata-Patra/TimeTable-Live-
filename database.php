<?php

// Load environment variables from .env file
function loadEnv($file) {
    if (!file_exists($file)) {
        throw new Exception("Env file not found.");
    }

    // Read and parse .env file
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '#') === 0) {
            continue; // Ignore comments
        }

        list($key, $value) = explode('=', $line, 2);
        if ($key && $value) {
            putenv(trim($key) . '=' . trim($value));
        }
    }
}

try {
    // Load the .env file
    loadEnv(__DIR__ . '/.env');

    // Fetch database credentials from environment variables
    $host = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');
    $dbname = getenv('DB_NAME');

    // Validate environment variables
    if (empty($host) || empty($username) || empty($password) || empty($dbname)) {
        throw new Exception("Missing database configuration in .env file.");
    }

    // Establish a database connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Return the connection
    return $conn;
} catch (Exception $e) {
    // Log the error securely and terminate the script
    error_log($e->getMessage(), 0);
    die("Database connection error.");
}
?>
