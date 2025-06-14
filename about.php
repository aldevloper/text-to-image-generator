<?php
// Include configuration file
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'includes/head.php'; ?>
  <title><?php echo "$website_name"; ?> About us - Image Generator</title>
</head>

<body>
  <div class="container">
    <?php include 'includes/header.php'; ?>

    <main class="main-content">
      <div class="hero-section">
        <h1>About <span class="highlight"><?php echo "$website_name" ?></span></h1>
        <p class="subtitle">Turn Words Into Art – Instantly</p>
      </div>


      <div class="about-content" style="max-width: 800px; margin: 0 auto;">
        <p>Welcome to <?php echo "$website_name" ?>, your go-to platform for turning imagination into images using the power of AI!

          We believe that creativity should be accessible to everyone, and that’s why we built this tool — to help users instantly
          generate high-quality images from simple text prompts. Whether you're a designer, content creator, student, marketer, or
          just someone who loves experimenting with visuals, our platform makes it easy and fun.</p>
        <br>
        <div class="mb-4">
          <h2 class="h4">🚀 What We Offer</h2>
          <ul>
            <li><strong>AI-Powered Image Generation:</strong> Type what you imagine, and our AI brings it to life.</li>
            <li><strong>Free & Easy to Use:</strong> No technical skills or sign-up required to start creating.</li>
            <li><strong>Fast & Reliable:</strong> Generate stunning images within seconds.</li>
            <li><strong>Creative Freedom:</strong> Explore limitless possibilities with every prompt.</li>
          </ul>
        </div>
        <br>
        <div class="mb-4">
          <h2 class="h4">💡 Our Mission</h2>
          <p>Our mission is to empower <strong>creators, thinkers, and innovators</strong> by making AI tools simple, fast, and accessible. We’re here to make sure everyone — from beginners to professionals — can use cutting-edge technology to express their ideas visually.</p>
        </div>
        <br>
        <div class="mb-4">
          <h2 class="h4">👨‍💻 Who We Are</h2>
          <p>We are a passionate team of developers and creatives who believe in the future of AI-generated content. Our goal is to provide tools that help unlock creativity and simplify the design process for people around the world.</p>
        </div>
        <br>
        <div class="mb-4">
          <h2 class="h4">📬 Connect With Us</h2>
          <p>Got questions, suggestions, or want to collaborate?</p>
          <ul>
            <li>Email us at: <a href="mailto:<?php echo "$email" ?>"><?php echo "$email" ?></a></li>
            <li>Interested in advertising? Visit our <a href="/advertisement.php">Advertise With Us</a> page.</li>
          </ul>
        </div>
      </div>
    </main>
  </div>
  <?php include 'includes/footer.php'; ?>
  <script src="js/scripts.js"></script>
</body>

</html>