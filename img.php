<?php
require_once 'includes/config.php';

function generateScreenshot($targetUrl) {
    global $rapidapi_key;

    $encodedUrl = urlencode($targetUrl);
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://text-to-image-generator-api-ai-image.p.rapidapi.com/ai?prompt=$encodedUrl",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: text-to-image-generator-api-ai-image.p.rapidapi.com",
            "x-rapidapi-key: $rapidapi_key"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return [
            'status' => 'error',
            'message' => "cURL Error: $err"
        ];
    } else {
        return json_decode($response, true);
    }
}
