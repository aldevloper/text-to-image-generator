<?php
// Ad display flags

$sponser      = false; // Enable Sponsorship ads (set to true to enable)

$showAutoAds  = false; // Enable Auto Ads globally (set to true to enable)
$showTopAd    = false;  // Show Top Ad (728x90) or responsive 
$showLeftAd   = false;  // Show Left Sidebar Ad (160x600)
$showRightAd  = false;  // Show Right Sidebar Ad (160x600)


// Sponsorship Horizontal Ad (468x60)
$Sponsorship_ads = '
<div class="ads-top ads_color" style="text-align:center; margin:20px 0;">
<a href="https://example.com" target="_blank" rel="noopener noreferrer">
    <img src="https://via.placeholder.com/468x60" width="468" height="60" alt="Advertisement">
  </a>
</div>

';



// Auto Ads (Google places ads automatically if enabled)
$autoAd = '';
if ($showAutoAds) {
    $autoAd = '
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-XXXXXXX"
            crossorigin="anonymous"></script>
    ';
}


// Top Horizontal Ad (728x90)
$topAd = '
<div class="ads-top ads_color" style="text-align:center; margin:20px 0;">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-XXXXXXX"
     data-ad-slot="XXXXXXX"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

';

// Left Vertical Ad (160x600)
$leftAd = '
    <div class="ads-vertical ads-left ads_color" style="position: absolute; left: 0; top: 100px;">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
             style="display:block;width:160px;height:600px"
             data-ad-client="ca-pub-XXXXXXX"
             data-ad-slot="XXXXXXX"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
';

// Right Vertical Ad (160x600)
$rightAd = '
    <div class="ads-vertical ads-right ads_color" style="position: absolute; right: 0; top: 100px;">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
             style="display:block;width:160px;height:600px"
             data-ad-client="ca-pub-XXXXXXX"
             data-ad-slot="XXXXXXX"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
';
?>
