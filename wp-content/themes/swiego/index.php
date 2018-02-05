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
    <div class="site-wrap">
        <div class="menu">
            <div class="container">
                <div class="logo">
                    <a href="#">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/swiego_logo_transp_w.png" width="250" height="40" alt="SWIEGO">
                    </a>
                </div>
                <nav class="mobile-menu">
                    <?php wp_nav_menu();?>
                    <div class="lines">
                        <svg width="30" height="30">
                            <path d="M0,5 30,5" stroke="#fff" stroke-width="4"/>
                            <path d="M0,15 30,15" stroke="#fff" stroke-width="4"/>
                            <path d="M0,25 30,25" stroke="#fff" stroke-width="4"/>
                        </svg>
                    </div>
                </nav>
            </div>
        </div>
        <div style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/cover.png')" class="cover">
            <div class="main-title">
                <h1>Title</h1>
                <h2>Subtitle</h2>
                <div class="buttons">
                    <div class="button">Book Now</div>
                    <a href="#">More About Us</a>
                </div>
            </div>
        </div>
        <div id="about" class="section">
            <div class="container">
                <h1>About us</h1>
                <h2>Subtitle</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class=item">
                            <div class="photo">
                                <img src="<?php echo get_template_directory_uri();?>/img/marius-ciocirlan-398931.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non cupidatat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="what" class="section">
            <div class="container">
                <h1>What we do</h1>
                <h2>Subtitle</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <div class="icon icon-email"></div>
                            <h1>Title</h1>
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci-didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <div class="icon icon-aeroplane"></div>
                            <h1>Title</h1>
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci-didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <div class="icon icon-stopwatch"></div>
                            <h1>Title</h1>
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci-didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section3" class="section">
            <div class="container">
                <div class="row times">
                    <div class="col-md-4">
                        <div class="item">
                            <h1>128</h1>
                            <h2>Project we did</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <h1>1367</h1>
                            <h2>Work Hours</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <h1>879</h1>
                            <h2>Cups of coffee</h2>
                        </div>
                    </div>
                </div>
                <div class="row times-carusel carusel">
                    <div class="row active">
                        <div class="item">
                            <h1>128</h1>
                            <h2>Project we did</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item">
                            <h1>1367</h1>
                            <h2>Work Hours</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="item">
                            <h1>879</h1>
                            <h2>Cups of coffee</h2>
                        </div>
                    </div>
                    <div class="pages">
                        <div class="control active"></div>
                        <div class="control"></div>
                        <div class="control"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section4" class="section">
            <div class="container">
                <div class="icon icon-left-quote"></div>

                <div class="carusel">
                    <div class="row active">
                        <div class="col-md-6">
                            <div class=item">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri();?>/img/clem-onojeghuo-150467.jpg" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non cupidatat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class=item">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri();?>/img/clem-onojeghuo-150467.jpg" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non cupidatat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class=item">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri();?>/img/clem-onojeghuo-150467.jpg" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non cupidatat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                            </div>
                        </div>
                    </div>
                    <div class="pages">
                        <div class="control active"></div>
                        <div class="control"></div>
                        <div class="control"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="section">
            <div class="container">
                <h1>Contact us</h1>
                <h2>Subtitle</h2>

                <div class="contact-form">
                    <div class="row">
                        <div class="item col-md-6">
                            <div class="feeld">
                                <div>Name</div>
                                <input type="text" />
                            </div>
                        </div>
                        <div class="item col-md-6">
                            <div class="feeld">
                                <div>E-mail</div>
                                <input type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="message row">
                        <div class="item">
                            <div>Message</div>
                            <textarea></textarea>
                        </div>
                    </div>
                    <div class="check row item">
                        <input id="send_me" type="checkbox" />
                        <label for="send_me">Send a copy to myself</label>
                    </div>
                    <div class="row buttons">
                        <div class="button">Send</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section6" class="section">
            <div id="feedbacks" class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <h2>Adress</h2>
                            <div class="desc">
                                Columbus Circle 80, NY
                                (870) 350 80 768
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 social">
                        <div class="item">
                            <a href="#"><div class="icon icon-in_ic"></div></a>
                            <a href="#"><div class="icon icon-fb_ic"></div></a>
                            <a href="#"><div class="icon icon-insta_ic"></div></a>
                            <a href="#"><div class="icon icon-tw_ic"></div></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <h2>Work hours </h2>
                            <div class="desc">
                                Mon-Fri 12PM to 8PM
                                Sat, Sun - Closed
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php wp_footer() ?>
    </div>
    </body>
</html>
