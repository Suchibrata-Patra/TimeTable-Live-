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
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

?>
