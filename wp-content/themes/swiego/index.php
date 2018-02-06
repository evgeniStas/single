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
        <div class="menu main-menu">
            <div class="container">
                <div class="logo">
                    <a href="#">
                        <?php
                        $meta_values = get_post_meta( 12,"logo");
                        $logo = wp_get_attachment_image_src($meta_values[0], 'full')[0];
                        ?>
                        <img src="<?php echo $logo; ?>" alt="SWIEGO">
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
        <div id="home" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/cover.png')" class="cover navs">
            <div class="main-title">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
                <div class="buttons">
                    <div class="button">Book Now</div>
                    <a href="#">More About Us</a>
                </div>
            </div>
        </div>
        <div id="about" class="section navs">
            <?php
            $id = 4;
            $post = get_post($id);
            ?>
            <div class="container">
                <h1><?php echo $post->post_title;?></h1>
                <h2><?php  the_field("description", $id); ?></h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class=item">
                            <div class="photo">
                                <img src="<?php echo get_field('photo', $id)["url"]; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <?php echo $content = $post->post_content;?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="what" class="section navs">
            <?php
            $id = 24;
            $post = get_post($id);
            ?>
            <div class="container">
                <h1><?php echo $post->post_title;?></h1>
                <h2><?php  the_field("description", $id); ?></h2>
                <div class="row">
                    <?php
                        $args = array(  'post_type'=> 'what_we_do', 'posts_per_page' => -1);
                        $WeDo = get_posts( $args );
                        wp_reset_postdata();

                        foreach( $WeDo as $item ) {
                        setup_postdata($item);
                        $meta_values = get_post_meta($item->ID);
                        ?>
                            <div class="col-md-4">
                                <div class="item">
                                    <div class="<?php echo $meta_values["icon"][0]?>"></div>
                                    <h1><?php echo $item->post_title;?></h1>
                                    <div class="desc">
                                        <?php echo $item->post_content;?>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div id="section3" class="section navs">
            <div class="container">
                <div class="row times">

                    <?php
                    $args = array(  'post_type'=> 'counts', 'posts_per_page' => -1);
                    $Counts = get_posts( $args );
                    wp_reset_postdata();

                    foreach( $Counts as $item ) {
                        setup_postdata($item);
                        ?>
                        <div class="col-md-4">
                            <div class="item">
                                <h1><?php echo $item->post_content;?></h1>
                                <h2><?php echo $item->post_title;?></h2>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="row times-carusel carusel">
                    <?php
                    $class="active";
                    $i = 0;
                    foreach( $Counts as $item ) {
                    setup_postdata($item);
                    if($i>0){
                        $class="";
                    }
                    ?>
                        <div class="row <?php echo $class;?>">
                            <div class="item">
                                <h1><?php echo $item->post_content;?></h1>
                                <h2><?php echo $item->post_title;?></h2>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                    <div class="pages">
                        <?php
                        $i = 0;
                        $class="active";
                        foreach( $Counts as $item ) {
                            if($i>0){
                                $class="";
                            }
                            ?>
                            <div class="control <?php echo $class;?>"></div>
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="feedbacks" class="section navs">
            <div class="container">
                <div class="icon icon-left-quote"></div>

                <div class="carusel">

                    <?php
                    $args = array(  'post_type'=> 'feedbacks', 'posts_per_page' => -1);
                    $Feedbacks = get_posts( $args );
                    wp_reset_postdata();
                    $class="active";
                    $i = 0;
                    foreach( $Feedbacks as $item ) {
                        setup_postdata($item);
                        $meta_values = get_post_meta( $item->ID ,"photo");
                        $img = wp_get_attachment_image_src($meta_values[0], 'full')[0];
                        if($i>0){
                            $class="";
                        }
                        ?>
                        <div class="row <?php echo $class;?>">
                            <div class="col-md-6">
                                <div class=item">
                                    <div class="photo">
                                        <img src="<?php echo $img;?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text">
                                    <?php echo $item->post_content;?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                    ?>
                    <div class="pages">
                        <?php
                        $i = 0;
                        $class="active";
                        foreach( $Feedbacks as $item ) {
                            if($i>0){
                                $class="";
                            }
                            ?>
                            <div class="control <?php echo $class;?>"></div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="section navs">
            <?php
            $id = 42;
            $post = get_post($id);
            ?>
            <div class="container">
                <h1><?php echo $post->post_title;?></h1>
                <h2><?php  the_field("description", $id); ?></h2>

                <div class="contact-form">
                    <div class="row">
                        <div class="item col-md-6">
                            <div class="feeld">
                                <div>Name</div>
                                <input id="name" type="text" />
                            </div>
                        </div>
                        <div class="item col-md-6">
                            <div class="feeld">
                                <div>E-mail</div>
                                <input id="email" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="message row">
                        <div class="item">
                            <div>Message</div>
                            <textarea id="message"></textarea>
                        </div>
                    </div>
                    <div class="check row item">
                        <input id="send_me" type="checkbox" />
                        <label for="send_me">Send a copy to myself</label>
                    </div>
                    <div class="row buttons">
                        <div id="send" class="button">Send</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section6" class="section navs">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <h2>Adress</h2>
                            <div class="desc">
                                <?php  the_field("adress", 12); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 social">
                        <div class="item">

                            <?php
                            $args = array(  'post_type'=> 'social', 'posts_per_page' => -1);
                            $Social = get_posts( $args );
                            wp_reset_postdata();
                            foreach( $Social as $item ) {
                                setup_postdata($item);
                                $meta_values = get_post_meta( $item->ID );
                                ?>
                                <a href="<?php echo $meta_values["link"][0];?>"><div class="<?php echo $meta_values["icon"][0];?>"></div></a>
                                <?php
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <h2>Work hours </h2>
                            <div class="desc">
                                <?php  the_field("work_hours", 12); ?>
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
