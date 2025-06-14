<header class="site-header">
  <div class="header-content container">
    <div class="logo">
      <a href="index.php">
        <span class="logo-icon">✨</span>
        <span class="logo-text"><?php echo "$website_name"; ?></span>
      </a>
    </div>

    <!-- Toggle Button for Mobile -->
    <button class="menu-toggle" aria-label="Toggle menu">☰</button>

    <nav class="main-nav">
      <ul>
        <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
        <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a></li>
        <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact Us</a></li>
        <li><a href="advertisement.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'advertisement.php' ? 'active' : ''; ?>">Advertise With Us</a></li>
      </ul>
    </nav>
  </div>
</header>
