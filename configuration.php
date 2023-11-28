<?php
define('DATABASE_SERVER', '');
define('DATABASE_USERNAME', '');
define('DATABASE_PASSWORD', '');
define('DATABASE_NAME', '');

/*
    (!) Be very careful when editing this file so that no errors appear!
*/

$name = "";
$favicon = ""; // Leave empty if you don't have one
$description = "";
$keywords = "";
$logo = ""; // Leave empty if you don't have one

$payments_integration = "Sell.app"; // Sell.app / Sellix / Shoppy.gg
$store = ""; // > Change this only if you are using Sell.app <

/*
    Replace this colors with HEX / RGB / HSL codes
    You can use https://htmlcolorcodes.com/
*/
$primary_color = "#ff0000";
$primary_hover_color = "#ff0000";

/* ====================
    TAWK.TO LIVE CHAT
   ==================== */

$livechat = true; // Set it to `true` to enable live chat / `false` to disable live chat

/*
    You can get the Property ID & Widget ID from https://dashboard.tawk.to
    (after registering an account & website domain) 

    For Property ID go to Settings > Overview
    For Widget ID go to Settings > Widget Chat

    NOTE: YOU CAN CUSTOMIZE THE DESIGN OF THE CHAT WIDGET
*/

$livechat_property_id = "";
$livechat_widget_id = "";


/* ===============
       NAVBAR
   =============== */
   $navbar = [
    "Items" => [
        [
            "Name" => "Home",
            "Link" => "Home"
        ],
        [
            "Name" => "Store",
            "Link" => "store"
        ],
        [
            "Name" => "Dash",
            "Link" => "Dash"
        ],
        [
            "Name" => "Portfolio",
            "Link" => "portfolio"
        ],
        [
            "Name" => "Forum",
            "Link" => "Forum"
        ],
        [
            "Name" => "Docs",
            "Link" => "Docs"
        ],
        [
            "Name" => "Status",
            "Link" => "Status"
        ],
        [
            "Name" => "Terms",
            "Link" => "terms"
        ]
    ],
    "Icons" => [
        // Discord
        [
            "Icon" => "socicon-discord",
            "Link" => ""
        ],

        // Telegram
        [
            "Icon" => "socicon-twitch",
            "Link" => ""
        ],

        [
            "Icon" => "socicon-youtube",
            "Link" => ""
        ],

        [
            "Icon" => "socicon-mail",
            "Link" => "mailto:"
        ]
    ]
];


/* ===============
      HOME PAGE
   =============== */
$hero = [
    "Title" => "Hey there, I'm 
                  Storm_Husky_👋",
    "Description" => "I am a vr content creator and Avatar designer and artist and twitch streamer",
    "Image" => "",
    "Button" => [
        "Text" => "<span class=\"mbri-search mbr-iconfont mbr-iconfont-btn\"></span>See our offers",
        "Link" => "store"
    ]
];

// Features
$features_title = "Why to choose us?";
$features = [
    [
        "Icon" => "mbri-delivery", // You can get icon names from: https://mobiriseicons.com/cheatsheet.html
        "Title" => "instant downloads",
        "Description" => "Get your purchased digital product faster than ever with our instant downloads!"
    ],
    [
        "Icon" => "mbri-help", // You can get icon names from: https://mobiriseicons.com/cheatsheet.html
        "Title" => "Fast Support",
        "Description" => "Experience top-notch customer service with our effective support team, always ready to help you with any questions or concerns you may have"
    ],
    [
        "Icon" => "mbri-credit-card", // You can get icon names from: https://mobiriseicons.com/cheatsheet.html
        "Title" => "Affordable Products",
        "Description" => "Find unbeatable value with our affordable prices, making it easy for you to get what you need without breaking the bank"
    ],
];

// FAQ
$faq_title = "FAQ";
$faqs = [
    [
        "Question" => "What payment methods are accepted?",
        "Answer" => "Paypal or cashapp or debit or credit card."
    ],
    [
        "Question" => "Do I need a license key?",
        "Answer" => "Yes after you place your order you can join the discord server and get your license key."
    ],
    [
        "Question" => "How do I manage my downloads and keys?",
        "Answer" => "You can use our web dashboard to manage your borders and license keys."
    ],
    [
        "Question" => "Will i get updates?",
        "Answer" => "Yes you will receive free updates whenever I need to update or add new features or fix anything."
    ],
];

// Contact
$contact_title = "Contact";
$contacts = [
    [
        "Icon" => "socicon-discord",
        "Name" => "Discord",
        "Link" => [
            "Text" => "Join the server",
            "Location" => ""
        ]
    ],
    [
        "Icon" => "socicon-mail",
        "Name" => "Email",
        "Link" => [
            "Text" => "Send us a email",
            "Location" => "mailto:"
        ],
        
    ],
];

/* ===============
    PRODUCTS PAGE
   =============== */
$products_search = true;
$products_per_row = 3;
$products_title = "Store";
$products_categories = [ "Worlds" , "Avatars" , "Bots" , "Tools" ];
$products = [
    [
        "ID" => "144298",
        "Category" => "Worlds",
        "Tumbnail" => "assets/images/products/LunaLounge.png",
        "Name" => "Luna Lounge VRCHAT Audio Link - Club World (PC)",
        "Price" => "$55.00",
        "Description" => "Features: Admin Panel | Games (2): Pool- Blackjack| DJ booth DJ camera and much more.",
        "Download" => "/Luna_Lounge_V1_(PC).rar"
    ],
    [
        "ID" => "144321",
        "Category" => "Worlds",
        "Tumbnail" => "assets/images/products/NightProwler.png",
        "Name" => "Night Prowler VRCHAT Audio Link - Club World (PC)",
        "Price" => "$50.00",
        "Description" => "Features: Admin Panel | Games (5): Spin the bottle - Pool - Beer pong - Blackjack - Battleshots and much more.",
        "Download" => "Files/Store//Pending/NP/Night%20Prowler%20Night%20Club%20(PC)%20V6.rar"
    ],
    [
        "ID" => "144328",
        "Category" => "Worlds",
        "Tumbnail" => "assets/images/products/TechnoTerminal.png",
        "Name" => "Techno Terminal VRCHAT Audio Link - Club World (PC)",
        "Price" => "$50.00",
        "Description" => "Features: Admin Panel | Games (5): Spin the bottle - Pool - Beer pong - Blackjack - Battleshots and much more.",
        "Download" => "/Techno_Terminal_(PC)_V8.rar"
    ],
    [
        "ID" => "144332",
        "Category" => "Worlds",
        "Tumbnail" => "assets/images/products/TwilightForest.png",
        "Name" => "Twilight Forest VRCHAT World (PC)",
        "Price" => "$50.00",
        "Description" => "Features: Audiolink Luma Driver | Admin Panel | Player Pickup and much more.",
        "Download" => "/Twilight_Forest(_PC)_V3.rar"
    ],
    [
        "ID" => "144333",
        "Category" => "Worlds",
        "Tumbnail" => "assets/images/products/EvergreenVale.png",
        "Name" => "Evergreen Vale VRCHAT World (PC)",
        "Price" => "$40.00",
        "Description" => "Features: Audiolink Luma Driver | Games (2): Pool - RC Cars and much more.",
        "Download" => "Files/Store//Pending/EV/Evergreen%20Vale%20(PC)%20V8.0.2.rar"
    ],
    [
        "ID" => "144335",
        "Category" => "Worlds",
        "Tumbnail" => "assets/images/products/VU.png",
        "Name" => "Velvet Underground VRCHAT Audio Link - Club World (PC)",
        "Price" => "$50.00",
        "Description" => "Features: Audiolink VRSL LTCGI Luma Driver | Games (4): Cards - Pool - Beer pong - Skee Ball | DJ Gear DJ Set | and much more.",
        "Download" => "/Velvet_Underground_Night_Club_V7.rar"
    ],
    [
        "ID" => "144336",
        "Category" => "Worlds",
        "Tumbnail" => "assets/images/products/NNC.png",
        "Name" => "Neon Nerve Center VRCHAT World (PC) & (Quest)",
        "Price" => "$30.00",
        "Description" => "Features: Audiolink Luma Driver | Games (4): Cards - Pool - Beer pong - Skee Ball - PunchingBag - RC Cars | VRoomba QvPen | and much more.",
        "Download" => "/Neon_Nerve_Center_(PC)_V2.rar"
    ],
    [
        "ID" => "144337",
        "Category" => "Tools",
        "Tumbnail" => "assets/images/products/WOS.png",
        "Name" => "Wolf OS",
        "Price" => "$15.00",
        "Description" => "Looking for a convenient and portable world menu to enhance your VRChat experience? Look no further than Wolf OS! This user-friendly menu offers a variety of useful features and tools.",
        "Download" => "/Wolf_OS_V14.unitypackage"
    ],
    [
        "ID" => "144338",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/Shadow.png",
        "Name" => "Shadow Canine Woof Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the Canis Woof Avatar base.",
        "Download" => "/Shadow.unitypackage"
    ],
    [
        "ID" => "144340",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/PurpleWolf.png",
        "Name" => "Purple Wolf Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the Canis Woof Avatar base.",
        "Download" => "/Purple_Wolf_Texture_Files.unitypackage"
    ],
    [
        "ID" => "144341",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/Duke.webp",
        "Name" => "Duke Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the Canis Woof Avatar base.",
        "Download" => "/Duke_Texture.unitypackage"
    ],
    [
        "ID" => "144342",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/Koda.webp",
        "Name" => "Koda Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the Canis Woof Avatar base.",
        "Download" => "/Koda_Texture.unitypackage"
    ],
    [
        "ID" => "144344",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/Death.webp",
        "Name" => "Death Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the Canis Woof Avatar base.",
        "Download" => "/Death.zip"
    ],
    [
        "ID" => "144346",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/Archer.png",
        "Name" => "Archer Canine Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the Archer Canine Avatar base.",
        "Download" => "/Ko-FI_Archer_Canine.unitypackage"
    ],
    [
        "ID" => "144359",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/BluePupperTexture.webp",
        "Name" => "Blue Pupper Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the Pupper Avatar base.",
        "Download" => "/Blue_Pupper.unitypackage"
    ],
    [
        "ID" => "144360",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/ChaosCanineTexture.PNG",
        "Name" => "Chaos Canine Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the Chaos Canine Avatar base.",
        "Download" => "/Gray_Chaos_Canine_Texture_Files.unitypackage"
    ],
    [
        "ID" => "144361",
        "Category" => "Avatars",
        "Tumbnail" => "assets/images/products/BuffOtter.webp",
        "Name" => "Buff Otter Texture",
        "Price" => "$5.00",
        "Description" => "Introducing our latest product: a fully finished texture for the uff Otter Avatar base.",
        "Download" => "/Buff_Otter.unitypackage"
    ],
    [
        "ID" => "144362",
        "Category" => "Bots",
        "Tumbnail" => "assets/images/products/plex-chatgpt.png",
        "Name" => "ChatGPT Addon For PlexBot",
        "Price" => "$10.00",
        "Description" => "Unleash ChatGPT: the game-changing Plex Bot add-on for captivating and intelligent server interactions. Elevate conversations, spark creativity, and unlock limitless possibilities. Upgrade your server today and experience the future of ChatGPT..",
        "Download" => "/ChatGPT-PlexBot_(v2.4.2).rar"
    ],
    [
        "ID" => "144370",
        "Category" => "Bots",
        "Tumbnail" => "assets/images/products/plex-chatgpt.png",
        "Name" => "ChatGPT Addon For PlexBot Source Code",
        "Price" => "$60.00",
        "Description" => "Unleash ChatGPT: the game-changing Plex Bot add-on for captivating and intelligent server interactions. Elevate conversations, spark creativity, and unlock limitless possibilities. Upgrade your server today and experience the future of ChatGPT..",
        "Download" => "/ChatGPT-PlexBot-_Source_Code_v2.5.3.rar"
    ],
    
];


/* ===============
      TERMS PAGE
   =============== */
$terms_title = "Terms";
$terms = "
<strong>1.</strong> By using our website and agreeing to these terms and conditions, you consent to our use of cookies in accordance with the terms of our privacy policy<br>
<strong>2.</strong> We or our licensors own the intellectual property rights in the website, VRC Unity assets, and material on the website. Subject to the license below, all these intellectual property rights are reserved<br>
<strong>3.</strong> By using our website or our store add-ons, you warrant and represent that you are at least 18 years of age. For some of our store add-ons, we require a valid ID check to confirm that you are 18 years or older<br>
<strong>4.</strong> We reserve the right to make corrections and changes to the website and VRC Unity assets at any time without notice<br>
<strong>5.</strong> You may hyperlink to our content as long as you do not imply any endorsement or sponsorship by us<br>
<strong>6.</strong> You may not create frames around our web pages or use other techniques that alter the visual presentation of our website<br>
<strong>7.</strong> We shall not be held responsible for any content that appears on your website. You agree to indemnify and defend us against all claims arising out of or based upon your website<br>
<strong>8.</strong> Please review our privacy policy to understand how we collect and use your personal information<br>
<strong>9.</strong> We reserve the right to modify or discontinue the website and VRC Unity assets at any time without notice<br>
<strong>10.</strong> If you find any link on our website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly<br>
<strong>11.</strong> We make no guarantees about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose<br>
<strong>12.</strong> We do not offer refunds for some of our store add-ons<br>
<strong>13.</strong> We are not responsible for any issues that arise from uploading avatars to your VRChat account<br>
<strong>14.</strong> You must be a New User in VRChat to upload any content. 2. We will need your vrchat login credentials to upload the avatar/world to your account<br>
<strong>15.</strong> You are not allowed to resell any assets included in the package. b. You are not allowed to redistribute the assets in any way (even if they are modified). c. Removal of the copyright on the panel will result in you losing your license to the asset<br>
<strong>16.</strong> Removal of the copyright on the panel will result in you losing your license to the asset<br>
<strong>17.</strong> By using stormhusky.me or our VRC Unity assets, you agree to these terms and conditions. If you do not agree with any part of these terms and conditions, do not use our website or our VRC Unity assets<br>
";

?>