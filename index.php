<?php
// Include configuration file
require_once 'includes/config.php';
?>
<?php include 'ads.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/head.php'; ?>
    <title><?php echo "$website_name";?> Text to Image Generator - Create stunning images from text</title>
    <?php if ($showAutoAds) { echo $autoAd; } ?>
</head>
<body>
    <div class="container">
        <?php include 'includes/header.php'; ?>
        <?php if ($showTopAd) { echo $topAd; } ?>
        <main class="main-content">
            <div class="hero-section">
                <h1>Text to Image <span class="highlight">Generator</span></h1>
                <p class="subtitle">Transform your imagination into visual art with AI</p>
            </div>
            

            <div class="form-container">
                <form id="imageGeneratorForm" action="result.php" method="post">
                    <div class="form-group">
                        <label for="prompt">Describe the image you want to create</label>
                        <textarea id="prompt" name="prompt" placeholder="E.g., rafel jet with iron man" required></textarea>
                        <div class="input-info">Be descriptive for better results</div>
                    </div>
                    <?php if ($showLeftAd) { echo $leftAd; } ?>
                    
                    
                    <div class="form-group">
                        <button type="submit" id="generateBtn" class="generate-btn">
                            <span class="btn-text">Generate Image</span>
                            <span class="btn-icon">→</span>
                        </button>
                    </div>
                    <?php if ($sponser) { echo $Sponsorship_ads; } ?>
                </form>
                <?php if ($showRightAd) { echo $rightAd; } ?>
            </div>
            
            <div class="examples-section">
                <h2>Popular Prompts</h2>
                <div class="examples-grid">
                    <div class="example-card" data-prompt="Envision a cute chimera, bee-rex. an uncanny blend of a bee and a T-Rex, Embodying the strange beauty of undiscovered biodiversity, colored mostly yellow and black">
                        <div class="example-content">
                            <h3>Blend of bee and T-Rex</h3>
                            <p>Envision a cute chimera, bee-rex. an uncanny blend of a bee and a T-Rex, Embodying the strange beauty of undiscovered biodiversity, colored mostly yellow and black</p>
                        </div>
                    </div>
                    <div class="example-card" data-prompt="The hungry puppy sits outside a bakery, the warm smell of fresh bread filling the air. His tiny nose twitches, and his tummy growls. He looks at a small loaf in the window, his eyes full of silent hunger, but no one offers him anything">
                        <div class="example-content">
                            <h3>The hungry puppy</h3>
                            <p>The hungry puppy sits outside a bakery, the warm smell of fresh bread filling the air. His tiny nose twitches, and his tummy growls. He looks at a small loaf in the window, his eyes full of silent hunger, but no one offers him anything</p>
                        </div>
                    </div>
                    <div class="example-card" data-prompt="An enchanting underwater scene featuring vibrant coral reefs, schools of colorful tropical fish, and rays of sunlight piercing through the surface, illuminating the ocean floor.">
                        <div class="example-content">
                            <h3>Underwater Scene</h3>
                            <p>An enchanting underwater scene featuring vibrant coral reefs, schools of colorful tropical fish, and rays of sunlight piercing through the surface, illuminating the ocean floor.</p>
                        </div>
                    </div>
                    <div class="example-card" data-prompt="An astronaut in a sleek white space suit riding a gallant horse across the red, dusty plains of Mars, with rocky formations and a glowing Earth visible in the pink-orange Martian sky">
                        <div class="example-content">
                            <h3>Space Adventure</h3>
                            <p>An astronaut in a sleek white space suit riding a gallant horse across the red, dusty plains of Mars, with rocky formations and a glowing Earth visible in the pink-orange Martian sky</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <div class="about-content" style="max-width: 960px; margin: 0 auto;">

        <?php include 'seo.php'; ?>
        </div>
        
    </div>
    <?php include 'includes/footer.php'; ?>
    <div id="loading-overlay" class="loading-overlay">
        <div class="loader"></div>
        <p>Creating your masterpiece...</p>
    </div>
    
    <script src="js/scripts.js"></script>
</body>
</html>