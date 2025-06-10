<?php
$url = "https://www.example.com/some page?query=test"; // Sample URL

// Step 1: URL sanitization (removes invalid characters)
$sanitized_url = filter_var($url, FILTER_SANITIZE_URL);

// Step 2: URL validation (checks if it is properly formed)
if (filter_var($sanitized_url, FILTER_VALIDATE_URL)) {
    echo "Valid URL: " . $sanitized_url;
} else {
    echo "Invalid URL.";
}
?>