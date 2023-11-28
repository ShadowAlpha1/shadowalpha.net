<?php require_once 'configuration.php'; ?>
<section data-bs-version="5.1" class="menu menu1 cid-sFGzlAXw3z" once="menu" id="menu1-2">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white text-primary display-7" href="home"><?php if (!empty($logo)) { ?><img src="<?= $logo ?>" alt="<?= $name ?> Logo"><?php } else echo $name; ?></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <?php foreach ($navbar['Items'] as $navbar_item): ?>
                    <li class="nav-item"><a class="nav-link link text-white text-primary display-4 nav-underline" href="<?= $navbar_item['Link']; ?>"><?= $navbar_item['Name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) { ?>
                <a href="init-oauth" class="login nav-link display-4">Login</a>
                <?php } else { ?>
                    <a href="/dashboard">
                <div class="profile nav-link text-center">
                    <img src="https://cdn.discordapp.com/avatars/<?= $_SESSION['userData']['id'] ?>/<?= $_SESSION['userData']['avatar'] ?>.png" />
                    <p class="display-4"><?= $_SESSION['userData']['name'] ?></p>
                </div>
                </a>
                <?php } ?>
                <div class="icons-menu">
                    <?php foreach ($navbar['Icons'] as $navbar_icon): ?>
                    <a class="iconfont-wrapper" href="<?= $navbar_icon['Link']; ?>" target="_blank">
                        <span class="p-2 mbr-iconfont <?= $navbar_icon['Icon']; ?> socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </nav>
</section>