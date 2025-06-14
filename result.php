<?php
error_reporting(0);
ini_set('display_errors', 0);
// Redirect to homepage if not accessed via POST with 'prompt'
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['prompt'])) {
    header('Location: index.php');
    exit;
}

include 'ads.php';
// Include configuration and API logic
require_once 'includes/config.php';


// Redirect if the API key is blank
if (!isset($rapidapi_key) || trim($rapidapi_key) === '') {
    header('Location: info.php');
    exit;
}

require_once 'img.php';

// Handle prompt input
$prompt = trim($_POST['prompt']);

// Call the API
$response = generateScreenshot($prompt);

// Fallback width/height if API doesn’t provide
$width = $response['width'] ?? 512;
$height = $response['height'] ?? 512;
$image_url = $response['image_url'] ?? '';
$hasError = $response['status'] !== 'success';
$errorMessage = $response['message'] ?? 'Failed to generate the image.';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <?php include 'includes/head.php'; ?>
    <title>Generated Image - Image Generator</title>
</head>

<body>
    <div class="container">
        <?php include 'includes/header.php'; ?>
        <?php if ($showLeftAd) {
            echo $leftAd;
        } ?>
        <main class="main-content result-page">
            <?php if (!$hasError) : ?>
                <div class="result-container">
                    <h1>Your Generated Image</h1>

                    <div class="result-details">
                        <div class="prompt-info">

                        </div>

                        <div class="image-container" id="image-result">
                            <img src="<?php echo $image_url; ?>" alt="Generated image" class="generated-image">

                            <div class="image-actions">
                                <a href="download.php?url=<?php echo urlencode($response['image_url']); ?>" class="download-btn">
                                    <span class="btn-icon">↓</span>
                                    <span class="btn-text">Download Image</span>
                                </a>
                                <button class="share-btn" id="share-btn">
                                    <span class="btn-icon">↗</span>
                                    <span class="btn-text">Share</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="next-actions">
                        <a href="index.php" class="back-btn">
                            <span class="btn-icon">←</span>
                            <span class="btn-text">Create Another Image</span>
                        </a>
                    </div>

                </div><?php if ($showTopAd) {
                            echo $topAd;
                        } ?>
            <?php else : ?>
                <div class="error-container">
                    <h1>Oops, something went wrong</h1>
                    <p class="error-message">Please wait sometime then</p>
                    <a href="index.php" class="back-btn">Check Again</a>
                </div>
            <?php endif; ?>

            <div class="result-info-section" style="padding: 20px; background: #f9f9f9; border-radius: 8px; margin-top: 30px;">
                <h2>🧠 AI Text-to-Image Generator – Free & Fast</h2>
                <p>Welcome to your <strong>AI-generated image result</strong>! Our <strong>text-to-image generator</strong> transforms your imagination into stunning visuals using the latest in artificial intelligence. Whether you're creating content for social media, blog posts, design inspiration, or just for fun — it's all <strong>free</strong> and super easy to use.</p>

                <h3>🖼️ What you can do next:</h3>
                <ul style="list-style: none; padding-left: 0;">
                    <li>Create more images with new prompts</li>
                    <li>Share your AI art with friends or followers</li>
                    <li>Download and use the image however you like</li>
                    <li>Bookmark us and come back anytime!</li>
                </ul>

                <h3>💡 Why Use Our Free Text to Image Tool?</h3>
                <ul style="list-style: none; padding-left: 0;">
                    <li>✅ 100% Free – no sign-up required</li>
                    <li>✅ Lightning-fast generation</li>
                    <li>✅ Unlimited creativity</li>
                    <li>✅ Mobile and desktop-friendly</li>
                    <li>✅ Works in all modern browsers</li>
                </ul>

                <p>From surreal creatures to realistic scenes, our AI turns your <strong>text prompts into amazing images</strong> in seconds.</p>

                <h3>💬 Try Prompts Like:</h3>
                <ul style="list-style: none; padding-left: 0;">
                    <li>"A futuristic city at sunset"</li>
                    <li>"A steampunk owl wearing goggles"</li>
                    <li>"A peaceful forest in watercolor style"</li>
                </ul>

                <h3>🤑 Support This Free Tool</h3>
                <p>We display ads to keep this service free for everyone. If you like it, consider sharing the site with friends or supporting us by exploring the ads you find interesting.</p>
            </div>

        </main>
        <?php if ($showRightAd) {
            echo $rightAd;
        } ?>

    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="js/result.js"></script>
    <script>
        function shareDomain() {
            // Get your domain name (you can replace this with your actual domain if needed)
            const domain = window.location.hostname;

            // Create the WhatsApp share URL
            const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(domain)}`;

            // Open the share URL in a new window
            window.open(whatsappUrl, '_blank');
        }
    </script>
</body>

</html>