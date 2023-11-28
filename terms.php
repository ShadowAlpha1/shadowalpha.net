<?php session_start(); require __DIR__ . '/inc/init.php'; ?>
<!DOCTYPE html>
<html  lang="en">
   <head>
      <meta charset="UTF-8">
      <title><?= $name; ?> ~ Terms</title>
      <meta property="og:type" content="website" />
      <meta property="og:url" content="https://stormhusky.com/terms" />
      <meta property="og:site_name" content="Storm_Husky_ ~ Terms" />
      <meta name="keywords" content="<?= $keywords ?>">
      <meta property="twitter:card" content="summary_large_image" />
      <meta property="og:locale" content="en-US" />
      <title data-react-helmet="true">Storm_Husky_ ~ Terms</title>
      <!-- endsection -->
      <meta data-react-helmet="true" property="og:title" content="Storm_Husky_ ~ Terms" />
      <meta data-react-helmet="true" property="og:description" content="<?= $description ?>" />
      <meta data-react-helmet="true" name="description" content="<?= $description ?>" />
      <meta data-react-helmet="true" property="og:image" content="https://stormhusky.com/assets/images/embed/terms.png" />
      <meta data-react-helmet="true" property="twitter:image" content="https://stormhusky.com/assets/images/embed/terms.png" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <link rel="shortcut icon" href="<?= $favicon ?>" type="image/<?php $ext = pathinfo($favicon, PATHINFO_EXTENSION); if ($ext == "ico") { $ext = "x-icon"; } if ($ext == "svg") { $ext = "svg+xml"; } echo $ext ?>">
      <style>:root { --primary-color: <?= $primary_color; ?>; --primary-hover-color: <?= $primary_hover_color; ?>; }</style>
      <style>  @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200;600&display=swap');
    @import url("assets/cursor/cursor.css");
    
    html {
      cursor: url("assets/images/cursor/cursor.png"), auto;
    }
    a:hover {
      cursor: url("assets/images/cursor/cursor-reversed.png"), auto;
    }
    button {
      cursor: url("assets/images/cursor/cursor-reversed.png"), auto;
    }
    </style>
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="assets/dropdown/css/style.css">
      <link rel="stylesheet" href="assets/socicon/css/styles.css">
      <link rel="stylesheet" href="assets/theme/css/style.css">
      <link rel="preload" href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
      </noscript>
      <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
      <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
   </head>
   <body>
      <?php include 'inc/navbar.php'; ?>
      <section data-bs-version="5.1" class="content5 cid-tlpPLJ77c9" id="content5-d">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12 col-lg-10">
                  <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5"><strong>
                     <?= $terms_title ?></strong>
                  </h4>
                  <p class="mbr-text mbr-fonts-style display-7"><?= $terms ?></p>
               </div>
            </div>
         </div>
      </section>
      <?php include 'inc/footer.php'; ?>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
      <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-S2BJ3VKPSP"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-S2BJ3VKPSP');
  </script>
   </body>
</html>