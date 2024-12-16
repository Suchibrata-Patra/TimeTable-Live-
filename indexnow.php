<?php
function notifyIndexNow($urlList) {
    // Correct IndexNow API endpoint
    $apiEndpoint = "https://api.indexnow.org/indexnow";  // Corrected API URL

    // Your API key and key location
    $apiKey = "ce258d32bcd1427c97f3e409a3314d5c";
    $keyLocation = "https://timetable.theapplication.in/ce258d32bcd1427c97f3e409a3314d5c.txt";

    // Prepare the POST data
    $postData = json_encode([
        "host" => "timetable.theapplication.in",  // Use your website domain here
        "key" => $apiKey,
        "keyLocation" => $keyLocation,
        "urlList" => $urlList  // This will be the array of URLs to notify
    ]);

    // Initialize cURL
    $ch = curl_init($apiEndpoint);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json; charset=utf-8",
        "Host: api.indexnow.org"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    // Execute the request
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Check if request was successful
    if ($httpCode == 200 || $httpCode == 202) {
        echo "✅ Successfully notified IndexNow for URLs: " . implode(", ", $urlList);
    } else {
        echo "❌ Failed to notify IndexNow. HTTP Code: $httpCode Response: $response";
    }

    // Close cURL session
    curl_close($ch);
}

// Example Usage: Notify multiple URLs
$urlList = [
    "https://timetable.theapplication.in/"
];

notifyIndexNow($urlList);
?>
