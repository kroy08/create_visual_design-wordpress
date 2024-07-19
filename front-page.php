<?php get_header()?>
     <section class="HomeAbout">
        <div class="container"> 
            <div class="HomeAbout__wrapper">
                
                    <div class="HomeAbout__text">
                        <h1><?php the_field('home_banner')?></h1>
                        <p><?php the_content()?></p>
                        <button class="contact__button">EXPLORE MORE</button>   
                    </div>           
                 <div class="HomeAbout__img">    <img src="<?php the_field('images')?>" alt="">  
                    </div>           
            </div>
        </div>
      </section>

            <!-- home services-->
            <section class="homeServices">
        <div class="container">
            <div class="services__wrapper">
            <?php
                $services = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_game' => -1
                ))
            ?>

            <?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post()?>
                <div class="services__card">
                <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                ?>

                    <div class="services__title">
                        <h2><?php the_title()?></h2>
                        <p><?php the_content()?></p>
                        <button class="contact__button">EXPLORE MORE</button>
                    </div>
                </div>
                <?php endwhile;
            else:
                echo "No more services";
            endif;
            wp_reset_postdata();
            ?>
            </div>
        </div>
      </section>

<!-- HOME ABOUT -->
<section class="homeAbout">
        <div class="container">
            <div class="homeAbout__wrapper">
                <div class="homeAbout__img"> 
                    <img src="<?php the_field('about2')?>" alt="">
                <img src="<?php the_field('about1')?>" alt=""> 
            </div>
                    <div class="homeAbout__title">
                            <h2><?php the_field('about-title')?></h2>
                            <p><?php the_field('about-text')?></p>
                   </div>  
            </div>
        </div>
       </section>

       <!-- Latest Trends -->
        <section class="homeTrends">
            <div class="container">
                <div class="homeTrends__title">
                    <h2>Latest Trends</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="homeTrends__wrapper">

                    <!-- <div class="Trends__cards"> -->
                    <?php
                $projects = new WP_Query(array(
                    'post_type' => 'projects',
                    'posts_per_game' => -1
                ))
                ?>
                 <?php if($projects->have_posts()) : while($projects->have_posts()) : $projects->the_post()?>
                    <div class="homeTrends__card">
                        <div class="homeTrends__img">
                        <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                            <h3><?php the_title()?></h3>
                        <p><?php the_content()?></p>
                        </div>
                    </div>
                    <?php endwhile;
            else:
                echo "No more services";
            endif;
            wp_reset_postdata();
            ?>     
                    </div>
                <!-- </div> -->
            </div>
        </section>

                    <!-- Call to Action -->
<section class="calltoAction">
    <div class="container">
        <div class="calltoAction__wrapper">
            <div class="calltoAction__text">
                <h2>Feel free to talk about your desire style</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="cta__button">CONTACT US</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>