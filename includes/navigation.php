<div class="collapse searchbar" id="searchbar">
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header id="site-header" class="site-header mobile-header-blue header-style-1">
    <!-- <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-8">
                    <ul class="topbar-left">
                        <li><i class="icon ion-md-pin"></i><?php echo COMPANY_ADDRESS; ?></li>
                        <li><i class="icon ion-md-call"></i><?php echo COMPANY_PHONE; ?></li>
                        <li><i class="icon ion-md-mail"></i><?php echo COMPANY_EMAIL; ?></li>
                    </ul>
                </div>
                <!-- <div class="col-md-4">
                    <ul class="topbar-right pull-right">
                        <li class="toggle_search topbar-search"><a href="#"><i class="icon ion-md-search"></i></a></li>
                    </ul>
                </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->

    <div class="main-header md-hidden sm-hidden">
        <div class="container-custom">
            <div class="row">
                <div class="logo-brand">
                    <a href="index.php"><img src="<?php echo COMPANY_LOGO; ?>" alt="<?php echo SITE_NAME; ?>"></a>
                </div>
                <div class="main-navigation">
                    <ul id="primary-menu" class="menu">
                        <?php foreach ($main_menu as $item): ?>
                            <li class="menu-item <?php echo isset($item['submenu']) ? 'menu-item-has-children' : ''; ?> <?php echo isset($item['current']) && $item['current'] ? 'current-menu-ancestor current-menu-parent' : ''; ?>">
                                <a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                                <?php if (isset($item['submenu'])): ?>
                                    <ul class="sub-menu">
                                        <?php foreach ($item['submenu'] as $submenu): ?>
                                            <li class="menu-item">
                                                <a href="<?php echo $submenu['url']; ?>"><?php echo $submenu['title']; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="get-a-quote.php" class="btn btn-primary">Get a quote<i class="icon ion-md-paper-plane"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-header">
        <div class="container-custom">
            <div class="row">
                <div class="col-xs-6">
                    <div class="logo-brand-mobile">
                        <a href="index.php"><img src="images/logo.png" alt="<?php echo SITE_NAME; ?>"></a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div id="mmenu_toggle">
                        <button></button>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mobile-nav">
                        <ul id="primary-menu-mobile" class="mobile-menu">
                            <?php foreach ($main_menu as $item): ?>
                                <li class="menu-item <?php echo isset($item['submenu']) ? 'menu-item-has-children' : ''; ?> <?php echo isset($item['current']) && $item['current'] ? 'current-menu-ancestor current-menu-parent' : ''; ?>">
                                    <a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                                    <?php if (isset($item['submenu'])): ?>
                                        <ul class="sub-menu">
                                            <?php foreach ($item['submenu'] as $submenu): ?>
                                                <li class="menu-item">
                                                    <a href="<?php echo $submenu['url']; ?>"><?php echo $submenu['title']; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="get-a-quote.php" class="btn btn-primary">Get a quote<i class="icon ion-md-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> 