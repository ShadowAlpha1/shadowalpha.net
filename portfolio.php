<?php session_start(); require __DIR__ . '/inc/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title><?= $name; ?> ~ Portfolio</title>
      <meta property="og:type" content="website" />
      <meta property="og:url" content="https://stormhusky.com/portfolio" />
      <meta property="og:site_name" content="Storm_Husky_ ~ Portfolio" />
      <meta name="keywords" content="<?= $keywords ?>">
      <meta property="twitter:card" content="summary_large_image" />
      <meta property="og:locale" content="en-US" />
      <title data-react-helmet="true">Storm_Husky_ ~ Portfolio</title>
      <!-- endsection -->
      <meta data-react-helmet="true" property="og:title" content="Storm_Husky_ ~ Portfolio" />
      <meta data-react-helmet="true" property="og:description" content="<?= $description ?>" />
      <meta data-react-helmet="true" name="description" content="<?= $description ?>" />
      <meta data-react-helmet="true" property="og:image" content="https://stormhusky.com/assets/images/embed/portfolio.png" />
      <meta data-react-helmet="true" property="twitter:image" content="https://stormhusky.com/assets/images/embed/portfolio.png" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
      <link rel="shortcut icon" href="<?= $favicon ?>" type="image/<?php $ext = pathinfo($favicon, PATHINFO_EXTENSION); if ($ext == "ico") { $ext = "x-icon"; } if ($ext == "svg") { $ext = "svg+xml"; } echo $ext ?>">
      <style>:root { --primary-color: <?= $primary_color; ?>; --primary-hover-color: <?= $primary_hover_color; ?>; }</style>
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200;600&display=swap');
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

         .item.features-image {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            padding: 20px;
         }

         .item-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
         }

         .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 9999;
         }

         .overlay-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
         }

         .overlay-img {
            max-width: 90%;
            max-height: 90%;
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
      <section data-bs-version="5.1" class="features3 cid-tlsBsZLT3y" id="features3-h">
         <div class="container">
            <div class="mbr-section-head">
               <div class="row">
                  <h4 class="col-12 col-md-8 mbr-section-title mbr-fonts-style mb-0 display-2">
                     <strong>My Portfolio</strong><br>
                  </h4>
               </div>
               <br>
            </div>
            <div class="mbr-section-head">
               <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5"></h5>
            </div>
            <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/Portfolio/Storm'sHome.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Storm's Home</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Welcome to Storm's Home‚ a serene and relaxing world․ Dive into the tranquil pool‚ enjoy a video player‚ and explore peaceful corners․ Find solace and escape the storm of the outside world in this blissful oasis․</p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_fd5205b8-0c7b-48a3-818b-88fcecf4f961" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/Portfolio/MidnightOasis.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Midnight Oasis</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Welcome to Midnight Oasis‚ a cozy world where tranquility reigns․ Immerse yourself in a relaxing atmosphere‚ surrounded by moonlit skies‚ glowing lanterns‚ and lush foliage․ Unwind in the indoor pool or soak in the pool tabs․ Find your moment of bliss at Midnight Oasis‚ the ultimate virtual sanctuary․</p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_0ccff68d-9ca1-481c-91b6-1d98471f7113" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/Portfolio/Hollan%E2%80%99s%20Avatar%20World.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Hollan’s Avatar World</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Welcome to my avatar world created by the amazing Storm_husky_. Please don’t forget to follow me at TikTok:HollanHusky Twitter:HollanHusky.</p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_95f718ae-7d4c-4e45-b377-dcde9bdde704" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/LunaLounge.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Luna Lounge</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Welcome to Luna Lounge night club come have a drink and party and chill at our blackjack tables.</p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_ee806399-de22-4a76-8c23-9e788e781153" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/NightProwler.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Night Prowler</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Attention attention calling all party animals let see you bust a move on the dances floor.</p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_0dc6258d-1752-4c75-ab7a-27d6237a8fe9" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/TechnoTerminal.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Techno Terminal</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4"> Welcome to Techno Terminal come shake that floofy butt to the beat of techno. </p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_947d9583-b040-405f-b343-0f7a23a42c9b" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/EvergreenVale.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Evergreen Vale</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Welcome to Evergreen Vale‚ a world designed for relaxation and play․ Discover a serene forest setting where you can unwind and explore to your heart's content․ </p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_eb157667-d1c3-48c2-b46c-73a6b856a02c" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/VU.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Velvet Underground</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Welcome to The Velvet Underground nightclub come shake your tail off and party like you never had before. </p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_75d037e6-ed7d-4fe2-b716-cb30ef57ed60" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/TwilightForest.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Twilight Forest</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Welcome to Twilight Forest come relax by the campfire or chill and hang out with friends and play some games. </p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_097dc440-2054-4883-a43b-85e50823f742" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/NNC.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Neon Nerve Center</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Welcome to The Neon Nerve Center come chill and have a nap as you ride through space. </p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_bcbe3ef7-a764-4a31-a78b-36abc3d60b11" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/WOS.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>Wolf OS</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Looking for a convenient and portable world menu to enhance your VRChat experience? Look no further than Wolf OS! This user-friendly menu offers a variety of useful features and tools. </p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="https://vrchat.com/home/world/wrld_35d45c95-969d-4db5-9eef-28ca051fac69" target="_blank">Visit on VR chat</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-4">
                  <div class="item features-image">
                     <div class="item-wrapper">
                        <div class="item-img">
                           <img src="https://stormhusky.com/assets/images/products/plex-chatgpt.png" loading="lazy" onclick="openOverlay(this.src)">
                        </div>
                        <div class="item-content">
                           <h5 class="item-title mbr-fonts-style display-7"><strong>ChatGPT Addon For PlexBot</strong></h5>
                           <p class="mbr-text mbr-fonts-style mt-3 display-4">Unleash ChatGPT: the game-changing Plex Bot add-on for captivating and intelligent server interactions. Elevate conversations, spark creativity, and unlock limitless possibilities. Upgrade your server today and experience the future of ChatGPT. </p>
                           <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4 shadow-none" href="http://discord.stormhusky.com/" target="_blank">Try it our in our discord</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="overlay" onclick="closeOverlay()">
         <div class="overlay-content">
            <img class="overlay-img" src="">
         </div>
      </div>
      <?php include 'inc/footer.php'; ?>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/smoothscroll/smooth-scroll.js"></script>
      <script src="assets/ytplayer/index.js"></script>
      <script src="assets/dropdown/js/navbar-dropdown.js"></script>
      <script src="assets/theme/js/script.js"></script>
      <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-S2BJ3VKPSP"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'G-S2BJ3VKPSP');

         function openOverlay(src) {
            var overlay = document.querySelector('.overlay');
            var overlayImg = overlay.querySelector('.overlay-img');
            overlayImg.src = src;
            overlay.style.display = 'flex';
         }

         function closeOverlay() {
            var overlay = document.querySelector('.overlay');
            overlay.style.display = 'none';
         }
      </script>
   </body>
</html>
