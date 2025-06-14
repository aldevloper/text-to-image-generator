<?php
// Include configuration file
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Viewport meta tag is very important for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/head.php'; ?>
    <title>Contact us - Image Generator</title>
</head>
<body>
    <div class="container">
        <?php include 'includes/header.php'; ?>
        
        <main class="main-content">
            <div class="about-content" style="max-width: 800px; margin: 0 auto;">
            <div class="text-center mb-4">
          <h1>Contact Us</h1>
          <p class="lead">Need help, have suggestions, or want to advertise with us? We're here to assist you.</p>
        </div>
        <br>
        <div class="contact-info-box">
          <h5 class="text-center mb-4">📨 Reach Out to Us</h5>
          <p class="text-center">
            You can contact our team by email at: <br>
            <a href="mailto:<?php echo "$email"?>"><?php echo "$email"?></a>
          </p>
<br>
          <h5 class="mt-4">💬 Facing any of the following?</h5>
          <ul>
            <li>Issues with image generation or errors while using the tool</li>
            <li>Suggestions for new features or improvements</li>
            <li>Partnership or advertising inquiries</li>
            <li>Reporting bugs, inappropriate content, or misuse</li>
            <li>General questions about how to use our service</li>
          </ul>

          <p class="mt-4">
            Please include as much detail as possible in your email so we can assist you faster.
          </p>

          <div class="alert alert-info text-center mt-4" role="alert">
            🕒 <strong>Note:</strong> Our support team usually responds within 24 hours. All inquiries are handled through email .
          </div>
            </div>
         
                
        
                
                 
        </main>


    </div>  
        <?php include 'includes/footer.php'; ?>
        <script src="js/scripts.js"></script>
</body>
</html>