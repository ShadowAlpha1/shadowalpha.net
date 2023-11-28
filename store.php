<?php
session_start();

require __DIR__ . '/inc/init.php';

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
   $customer = $user->get($_SESSION['userData']['id']);
   $customerProducts = explode('|', $customer['products']);
}
?>
<!DOCTYPE html>
<html  lang="en">
   <head>
      <meta charset="UTF-8">
      <title><?= $name; ?> ~ Store</title>
      <meta property="og:type" content="website" />
      <meta property="og:url" content="https://stormhusky.com/store" />
      <meta property="og:site_name" content="Storm_Husky_ ~ Store" />
      <meta name="keywords" content="<?= $keywords ?>">
      <meta property="twitter:card" content="summary_large_image" />
      <meta property="og:locale" content="en-US" />
      <title data-react-helmet="true">Storm_Husky_ ~ Store</title>
      <!-- endsection -->
      <meta data-react-helmet="true" property="og:title" content="Storm_Husky_ ~ Store" />
      <meta data-react-helmet="true" property="og:description" content="<?= $description ?>" />
      <meta data-react-helmet="true" name="description" content="<?= $description ?>" />
      <meta data-react-helmet="true" property="og:image" content="https://stormhusky.com/assets/images/embed/store.png" />
      <meta data-react-helmet="true" property="twitter:image" content="https://stormhusky.com/assets/images/embed/store.png" />
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
      <?php
      if ($payments_integration === "Sellix") {
         echo '<link href="https://cdn.sellix.io/static/css/embed.css" rel="stylesheet"/>';
      } elseif ($payments_integration === "Sell.app") {
         echo '<link href="https://cdn.sell.app/embed/style.css" rel="stylesheet" />';
      } elseif ($payments_integration === "Shoppy.gg") {
      } else {
         die ('ERROR: Invalid payments integration. Check configuration.');
      }
      ?>
   </head>
   <body>
      <?php include 'inc/navbar.php'; ?>
      <section data-bs-version="5.1" class="features3 cid-tlsBsZLT3y" id="features3-h">
         <div class="container">
            <div class="mbr-section-head">
               <div class="row">
                  <h4 class="col-12 col-md-8 mbr-section-title mbr-fonts-style mb-0 display-2">
                     <strong><?= $products_title ?></strong><br>
                  </h4>
                  <?php if ($products_search) { ?>
                  <input type="text" id="search_product" onkeyup="searchProduct()" placeholder="Search by name, description or price..." class="col-12 col-md-4 form-control text-white" style="background-color: #202020;">
                  <?php } ?>
               </div>
               <br>
            </div>

            <p class="mbr-text mbr-fonts-style mt-3 display-4" id="not_found"></p>

            <?php foreach ($products_categories as $product_category): ?>
            <div class="mbr-section-head">
               <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5"><?= $product_category ?></h5>
            </div>
            <div class="row mt-4">
               <?php foreach ($products as $product):
               if ($product['Category'] == $product_category) { ?>
               <div class="item features-image сol-12 col-md-6 col-lg-<?= round(12 / $products_per_row) ?>">
                  <div class="item-wrapper">
                     <div class="item-img">
                        <img src="<?= $product['Tumbnail']; ?>" alt="<?= $product['Name']; ?> Tumbnail" loading="lazy">
                     </div>
                     <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong><?= $product['Name']; ?></strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><?= $product['Price']; ?></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-4"><?= $product['Description']; ?></p>
                     </div>
                     <div class="mbr-section-btn item-footer mt-2">
                        <?php 
                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                           if (!in_array($product['ID'], $customerProducts)) { ?>
                                 <button class="btn btn-primary item-btn display-4 shadow-none" <?php if ($payments_integration === "Sellix") { ?> data-sellix-product="<?= $product['ID']; ?>" <?php } elseif ($payments_integration === "Shoppy.gg") { ?> data-shoppy-product="<?= $product['ID']; ?>" <?php } elseif ($payments_integration === "Sell.app") { ?> data-sell-store="<?= $store; ?>" data-sell-product="<?= $product['ID']; ?>" data-sell-theme="#E39C47" data-sell-darkmode="true" <?php } ?> onclick="createPurchase('<?= $_SESSION['userData']['id'] ?>', '<?= $product['ID'] ?>')">Purchase</button>
                           <?php } else { ?>
                                 <a href="<?= $product['Download'] ?>" target="_blank" class="btn btn-primary item-btn display-4 shadow-none">Download</a>
                           <?php } 
                        } else { ?> 
                           <a href="init-oauth" class="btn btn-primary item-btn display-4 shadow-none">Purchase</a> 
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <?php } endforeach; ?>
            </div>
            <?php endforeach; ?>
         </div>
      </section>
      <?php include 'inc/footer.php'; ?>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
      <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
      <script>
         function createPurchase(userId, product) {
            var myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

            var urlencoded = new URLSearchParams();
            urlencoded.append("userId", userId);
            urlencoded.append("product", product);

            var requestOptions = {
               method: 'POST',
               headers: myHeaders,
               body: urlencoded,
               redirect: 'follow'
            };

            fetch("/api/order", requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
         }
      </script>
      <?php
      if ($payments_integration === "Sellix") {
         echo '<script src="https://cdn.sellix.io/static/js/embed.js"></script>';
      } elseif ($payments_integration === "Sell.app") {
         echo '<script src="https://cdn.sell.app/embed/script.js" type="module"></script>';
      } elseif ($payments_integration === "Shoppy.gg") {
         echo '<script src="https://shoppy.gg/api/embed.js"></script>';
      } 
      
      if ($products_search) { ?>
      <script>
         function searchProduct() {
            var input, filter, products, found = 0;
            input = document.getElementById("search_product");
            filter = input.value.toUpperCase();
            products = document.getElementsByClassName("item");

            if (filter == "") document.getElementById("not_found").innerHTML = "";

            for (var i = 0; i < products.length; i++) {
               name = products[i].getElementsByClassName("item-title")[0].textContent;
               if (name.toUpperCase().indexOf(filter) > -1) {
                     products[i].style.display = "";
                     found++;
                     document.getElementById("not_found").innerHTML = "";
               } else {
                     description = products[i].getElementsByClassName("mbr-text")[0].textContent;
                     if (description.toUpperCase().indexOf(filter) > -1) {
                        products[i].style.display = "";
                        found++;
                        document.getElementById("not_found").innerHTML = "";
                     } else {
                        price = products[i].getElementsByClassName("item-subtitle")[0].textContent;
                        if (price.toUpperCase().indexOf(filter) > -1) {
                           products[i].style.display = "";
                           found++;
                           document.getElementById("not_found").innerHTML = "";
                        } else {
                           products[i].style.display = "none";
                        }
                     }
               }
            }
            if (found === 0) {
               document.getElementById("not_found").innerHTML = "No products found based on your search<br><br>";

               for (var i = 0; i < products.length; i++) {
                  products[i].style.display = "";
               }
            }
         }
      </script>
      <?php } ?>
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-S2BJ3VKPSP"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
      
         gtag('config', 'G-S2BJ3VKPSP');
      </script>
   </body>
</html>