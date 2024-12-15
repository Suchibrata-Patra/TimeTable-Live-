<?php
function loadEnv($file) {
    if (!file_exists($file)) {
        throw new Exception("Env file not found.");
    }

    // Read the .env file and parse it
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignore comments and empty lines
        if (strpos($line, '#') === 0) {
            continue;
        }
        // Ensure no additional whitespace around key-value pairs
        list($key, $value) = explode('=', $line, 2);
        if ($key && $value) {
            // Set environment variables securely
            putenv(trim($key) . '=' . trim($value));
        }
    }
}

loadEnv(__DIR__ . '/.env');

$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

if (empty($host) || empty($username) || empty($password) || empty($dbname)) {
    error_log("Missing or incorrect environment variables.", 0);
    die("An error occurred while configuring the database connection.");
}

if (!filter_var($host, FILTER_VALIDATE_URL) && !preg_match('/^[a-zA-Z0-9.-]+$/', $host)) {
    error_log("Invalid DB_HOST value.", 0);
    die("Invalid database host.");
}

if (!preg_match('/^[a-zA-Z0-9_]+$/', $dbname)) {
    error_log("Invalid DB_NAME value.", 0);
    die("Invalid database name.");
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Successfully connected!";
} catch (PDOException $e) {
    // Log the error securely without exposing sensitive details
    error_log($e->getMessage(), 0);
    die("Unable to connect to the database.");
}
?>
