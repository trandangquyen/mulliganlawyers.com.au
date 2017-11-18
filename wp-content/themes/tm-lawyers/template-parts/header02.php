<?php tha_header_before(); ?>
<?php if ( Kirki::get_option( 'tm-lawyers', 'top_enable' ) == 1 ) { ?>
    <div class="site-top">
        <div class="container">
            <div class="row middle">
                <div class="col-md-6 site-top-left">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'top-social',
                        'container_class' => 'social-menu',
                        'fallback_cb'     => false
                    ) ); ?>
                </div>
                <div class="col-md-6 end-md end-lg site-top-right">
					<span class="site-top-right-text">
						<?php echo Kirki::get_option( 'tm-lawyers', 'top_right_text' ); ?>
					</span>
                    <?php if ( class_exists( 'WooCommerce' ) && Kirki::get_option( 'tm-lawyers', 'mini_cart_enable' ) == 1 ) { ?>
                        <div class="mini-cart">
                            <?php echo tm_lawyers_minicart(); ?>
                            <div class="widget_shopping_cart_content"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<header class="site-header">
    <div class="container">
        <div class="row row-xs-center">
            <?php if ( Kirki::get_option( 'tm-lawyers', 'header_right_enable' ) == 1 ) { ?>
            <div class="col-md-3 col-xs-8 site-branding">
                <?php } else { ?>
                <div class="col-md-6 col-xs-8 site-branding">
                    <?php } ?>
                    <div class="container">
                        <?php
                        $logo        = Kirki::get_option( 'tm-lawyers', 'logo' );
                        $logo_retina = Kirki::get_option( 'tm-lawyers', 'logo_retina' );
                        if ( $logo ) { ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img
                                    src="<?php echo esc_url( $logo ); ?>" <?php if ( $logo_retina ) { ?> srcset="<?php echo esc_url( $logo_retina ); ?> 2x" <?php } ?>
                                    alt="<?php bloginfo( 'name' ); ?>"/>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                               rel="home"><?php bloginfo( 'name' ); ?></a>
                        <?php } ?>
                    </div>
                </div>
                <?php if ( Kirki::get_option( 'tm-lawyers', 'search_enable' ) == 1 ) { ?>
                    <div class="col-xs-2 hidden-md-up align-right search-box-mobile">
                        <div class="search-btn">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <div class="col-xs-2 hidden-md-up align-right">
                        <i id="open-left" class="fa fa-navicon"></i>
                    </div>
                <?php } else { ?>
                    <div class="col-xs-4 hidden-md-up align-right">
                        <i id="open-left" class="fa fa-navicon"></i>
                    </div>
                <?php } ?>
                <div class="col-md-3 hidden-sm-down site-header-info">
                    <div class="site-header-info-content">
                        <?php dynamic_sidebar( 'header02-info1' ); ?>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm-down site-header-info">
                    <div class="site-header-info-content">
                        <?php dynamic_sidebar( 'header02-info2' ); ?>
                    </div>
                </div>
                <?php if ( Kirki::get_option( 'tm-lawyers', 'header_right_enable' ) == 1 ) { ?>
                    <div class="col-md-3 hidden-sm-down align-center site-header-right">
                        <div class="site-header-right-content">
                            <div class="site-header-right-content-inner">
                                <?php echo html_entity_decode( Kirki::get_option( 'tm-lawyers', 'header_right_text' ) ); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</header><!-- .site-header -->
<?php tha_header_after(); ?>
<nav id="site-navigation" class="main-navigation hidden-sm-down">
    <div class="container">
        <div class="main-navigation-inner">
            <div class="row row-xs-center">
                <?php if ( Kirki::get_option( 'tm-lawyers', 'search_enable' ) == 1 ) { ?>
                    <?php $class = 'col-md-11'; ?>
                <?php } else { ?>
                    <?php $class = 'col-md-12'; ?>
                <?php } ?>
                <div class="<?php echo esc_attr( $class ); ?> col-nav">
                    <?php if ( class_exists( 'TM_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'menu_id'         => 'primary-menu',
                            'container_class' => 'primary-menu',
                            'walker'          => new TM_Walker_Nav_Menu
                        ) );
                    } else {
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'menu_id'         => 'primary-menu',
                            'container_class' => 'primary-menu'
                        ) );
                    } ?>
                </div>
                <?php if ( Kirki::get_option( 'tm-lawyers', 'search_enable' ) == 1 ) { ?>
                    <div class="col-md-1 hidden-sm-down end col-search">
                        <div class="col-search-content">
                            <div class="search-btn">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</nav><!-- .main-navigation -->