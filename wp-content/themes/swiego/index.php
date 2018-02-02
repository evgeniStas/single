<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 02.02.18
 * Time: 16:31
 */
?>
<html>
    <head>
        <?php get_header() ?>
    </head>
    <body>
        <div class="menu">
            <div class="container">
                <div class="logo">
                    <a href="#">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/swiego_logo_transp_w.png" width="250" height="40" alt="SWIEGO">
                    </a>
                </div>
                <nav>
                    <?php wp_nav_menu();?>
                </nav>
            </div>
        </div>
        <div style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/cover.jpg')" class="cover">
            <div class="main-title">
                <h1>Software Outsourcing &amp; Offshore Development Eng</h1>
                <h2>Developing The Future</h2>
            </div>
        </div>
        Hello world
    <?php wp_footer() ?>
    </body>
</html>
