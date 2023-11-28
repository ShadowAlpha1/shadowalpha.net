<?php session_start(); require __DIR__ . '/inc/init.php'; ?>
<!DOCTYPE html>
<html  lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?= $name; ?> ~ Home</title>
      <meta property="og:type" content="website" />
      <meta property="og:url" content="https://stormhusky.com/" />
      <meta property="og:site_name" content="Storm_Husky_ ~ Home" />
      <meta name="keywords" content="<?= $keywords ?>">
      <meta property="twitter:card" content="summary_large_image" />
      <meta property="og:locale" content="en-US" />
      <title data-react-helmet="true">Storm_Husky_ ~ Home</title>
      <!-- endsection -->
      <meta data-react-helmet="true" property="og:title" content="Storm_Husky_ ~ Home" />
      <meta data-react-helmet="true" property="og:description" content="<?= $description ?>" />
      <meta data-react-helmet="true" name="description" content="<?= $description ?>" />
      <meta data-react-helmet="true" property="og:image" content="https://stormhusky.com/assets/images/embed/home.png" />
      <meta data-react-helmet="true" property="twitter:image" content="https://stormhusky.com/assets/images/embed/home.png" />
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

      <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
      <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
      <link rel="stylesheet" href="assets/parallax/jarallax.css">
      <link rel="stylesheet" href="assets/dropdown/css/style.css">
      <link rel="stylesheet" href="assets/socicon/css/styles.css">
      <link rel="stylesheet" href="assets/theme/css/style.css">
      <link rel="preload" href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
      </noscript>
      <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
      <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
      <style>@-webkit-keyframes updown{0%{transform:translateY(0)}100%{transform:translateY(-10px)}}</style>
      
   </head>
   <body>
      <?php include 'inc/navbar.php'; ?>
      <section data-bs-version="5.1" class="header14 cid-tlpzN1oFGA mbr-fullscreen mbr-parallax-background" id="header14-9">
      <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(35, 35, 35);"></div>
         <div class="container">
            <div class="row justify-content-center align-items-center">
               <div class="col-12 col-md-6 image-wrapper">
                  <img src="<?= $hero['Image']; ?>" style="animation: updown 1s infinite alternate;">
               </div>
               <div class="col-12 col-md">
                  <div class="text-wrapper">
                     <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong><?= $hero['Title']; ?></strong></h1>
                     <p class="mbr-text mbr-fonts-style display-7"><?= $hero['Description']; ?></p>
                     <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="<?= $hero['Button']['Link']; ?>"><?= $hero['Button']['Text']; ?></a></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section data-bs-version="5.1" class="features1 cid-tlp60UBm8g" id="features1-3">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg-9">
                  <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong><?= $features_title; ?></strong></h3>
               </div>
            </div>
            <div class="row">
               <?php foreach ($features as $feature): ?>
               <div class="card col-12 col-md-6 col-lg-3">
                  <div class="card-wrapper">
                     <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                           <span class="mbr-iconfont <?= $feature['Icon']; ?>"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-7"><strong><?= $feature['Title']; ?></strong></h5>
                        <p class="card-text mbr-fonts-style display-7"><?= $feature['Description']; ?></p>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
            </div>
         </div>
      </section>
      <section data-bs-version="5.1" class="content16 cid-tlp7msq534" id="content16-4">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-md-10">
                  <div class="mbr-section-head align-center mb-4">
                     <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong><?= $faq_title; ?></strong>
                     </h3>
                  </div>
                  <div id="bootstrap-accordion_6" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                     <?php $faq_id = 0; foreach ($faqs as $faq): $faq_id++; ?>
                     <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                           <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse<?= $faq_id; ?>_6" aria-expanded="false" aria-controls="collapse1">
                              <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong><?= $faq['Question']; ?></strong></h6>
                              <span class="sign mbr-iconfont mbri-arrow-down"></span>
                           </a>
                        </div>
                        <div id="collapse<?= $faq_id; ?>_6" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_6">
                           <div class="panel-body">
                              <p class="mbr-fonts-style panel-text display-4"><?= $faq['Answer']; ?></p>
                           </div>
                        </div>
                     </div>
                     <?php endforeach; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section data-bs-version="5.1" class="contacts1 cid-tlpe5OYP4s" id="contacts1-5">
         <div class="container">
            <div class="mbr-section-head">
               <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                  <strong><?= $contact_title; ?></strong>
               </h3>
            </div>
            <div class="row justify-content-center mt-4">
               <?php foreach ($contacts as $contact): ?>
               <div class="card col-12 col-lg-6" role="button">
                  <div class="card-wrapper">
                     <div class="card-box align-center">
                        <div class="image-wrapper">
                           <span class="mbr-iconfont <?= $contact['Icon']; ?> socicon"></span>
                        </div>
                        <h4 class="card-title mbr-fonts-style mb-2 display-2">
                           <strong><?= $contact['Name']; ?></strong>
                        </h4>
                        <h5 class="link mbr-fonts-style display-7"><a class="text-primary" href="<?= $contact['Link']['Location']; ?>" target="_blank"><?= $contact['Link']['Text']; ?></a></h5>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
            </div>
         </div>
      </section>
      <?php include 'inc/footer.php'; ?>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/parallax/jarallax.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>  <script src="assets/theme/js/script.js"></script>  
      <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-S2BJ3VKPSP"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
      
         gtag('config', 'G-S2BJ3VKPSP');
      </script>
</script>
   </body>
</html>