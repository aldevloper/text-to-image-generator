<?php
if (!isset($_GET['url'])) {
    http_response_code(400);
    echo 'Missing image URL';
    exit;
}

$imageUrl = $_GET['url'];

// Validate URL
if (!filter_var($imageUrl, FILTER_VALIDATE_URL)) {
    http_response_code(400);
    echo 'Invalid image URL';
    exit;
}

// Get image content from remote URL
$imageData = @file_get_contents($imageUrl);
if ($imageData === false) {
    http_response_code(500);
    echo 'Failed to fetch image from URL';
    exit;
}

// Get image type from headers
$headers = get_headers($imageUrl, 1);
$contentType = $headers['Content-Type'] ?? 'image/jpeg';
$extension = pathinfo(parse_url($imageUrl, PHP_URL_PATH), PATHINFO_EXTENSION);
$extension = $extension ?: 'jpg'; // Fallback to jpg if unknown

// Force download with proper headers
header('Content-Description: File Transfer');
header('Content-Type: ' . $contentType);
header('Content-Disposition: attachment; filename="image' . time() . '.' . $extension . '"');
header('Content-Length: ' . strlen($imageData));
echo $imageData;
exit;
