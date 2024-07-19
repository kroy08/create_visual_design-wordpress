<?php get_header()?>

<!-- ABOUT PAGE -->
<?php if(is_page('ABOUT')) {?>
<section class="aboutMe">
        <div class="container">
            <div class="aboutMe__wrapper">
                <div class="aboutMe__title">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h1><?php the_field('aboutme-title')?></h1>
                    <p><?php the_field('aboutme-text')?></p>
                    
                    <ul class="aboutMe--social">
                        <li>
                          <a href=""><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                          <a href=""><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                          <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                        </li>
                        <li>
                          <a href=""><i class="fa-brands fa-youtube"></i></a>
                        </li>
                      </ul>  
                </div>

                <div class="aboutMe__img">
                    <img src="<?php the_field('aboutme-img')?>"  alt="">
                </div>
            </div>
            <div class="arrow__down">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
     </section>
     
     <!-- My Recent Project -->

     <section class="Project">
        <div class="container">
            <div class="project__title">
                <h2>My Recent Projects</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, veritatis?</p>
            </div>
            <div class="project__wrapper">
            <?php
                $recents = new WP_Query(array(
                    'post_type' => 'recents',
                    'posts_per_game' => -6
                ))
                ?>
                 <?php if($recents->have_posts()) : while($recents->have_posts()) : $recents->the_post()?>  
            <div class="project__cards">
                <div class="project__img">
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
        </div>
     </section>
     <?php }?>


<!-- CONTACT -->
<?php if(is_page('CONTACTS')) {?>
 <section class="contact">
        <div class="container">
            <div class="contact__info">
                <h2><?php the_field('contact-title')?></h2>
                
            </div>
            <div class="contact__wrapper">
                <div class="icon__info">
                    <p><?php the_field('contact-text')?></p>
                    <ul class="info__social">
                        <li><i class="fa-solid fa-phone"></i> +63 987 654 3210 </li>
                        <li><i class="fa-solid fa-envelope"></i>inquire@creativevisualdesigns.com</li>
                        <li><i class="fa-solid fa-map-pin"></i> Baloc Road, Brgy San Pablo City<br> Laguna Philippines 4000</li>
                    </ul>
                    <div class="contact__icons">
                        <ul class="contact--icons">
                            <li>    
                              <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                              <a href=""><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                              <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                            </li>
                            <li>
                              <a href=""><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contactBanner__input">
                    <form action="" class="contact__input">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <textarea name="" id="" placeholder="Message"></textarea>
                    </form>
                    <button class="FORM__button">SEND</button>
            </div>
        </div>
    </section>
    <?php }?>


    <!-- UPDATESSSSSSS -->
    <?php if(is_page('UPDATE')) {?>
    <section class="update">
        <div class="container">
            <div class="update__title">
            <h1>Latest Trends</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, aliquid!</p>
        </div>
            <div class="update__wrapper">
                <div class="update__left">
                <?php
                $latests = new WP_Query(array(
                    'post_type' => 'latests',
                    'posts_per_game' => -1
                ))
                ?>
                 <?php if($latests->have_posts()) : while($latests->have_posts()) : $latests->the_post()?>
                <div class="update__content">
                    <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                    <ul>
                        <li><i class="fa-solid fa-user"></i>Roy Balaaldia</li>
                        <li><i class="fa-solid fa-calendar"></i>Roy Balaaldia</li>
                        <li><i class="fa-solid fa-tag"></i>Roy Balaaldia</li>
                    </ul>
                    <h3><?php the_title()?></h3>
                    <p><?php the_content()?></p>
                    <a href="">Read more</a>
                </div>
                <?php endwhile;
            else:
                echo "No more services";
            endif;
            wp_reset_postdata();
            ?> 
                
                </div>
        
                <div class="update__right">
                    <div class="update__categories">
                        <h3>Categories</h3>
                        <table>
                            <tr>
                                <td> Web Design</td>
                                <td>(2)</td>
                            </tr>
                            <tr>
                                <td>Web Development</td>
                                <td>(3)</td>
                            </tr>
                            <tr>
                                <td>Wire Frame</td>
                                <td>(1)</td>
                            </tr>
                            <tr>
                                <td>Social Media</td>
                                <td>(2)</td>
                            </tr>
                        </table>
                </div>
                <div class="udpate__recent">
                    <h3>RECENT POST</h3>
                    <?php
                $posts = new WP_Query(array(
                    'post_type' => 'posts',
                    'posts_per_game' => -1
                ))
                ?>
                 <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post()?>
                    <div class="update__recent__details">
                    <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                        <div class="update__recent--text">
                        <h4><?php the_title()?></h4>
                        <p><?php echo get_the_date('M j, Y')?></p>
                        </div>
                    </div>
                    <?php endwhile;
            else:
                echo "No more services";
            endif;
            wp_reset_postdata();
            ?> 
  
                </div>
             <div class="tags">TAGS</div>
             <div class="tag__buttons">
                <a href="" class="btn bg--tertiary">WEB DESIGN</a>
                <a href="" class="btn bg--tertiary">WIRE FRAME</a>
            </div>
            <div class="tag__buttons">
                <a href="" class="btn bg--tertiary">WEB DEVELOPMENT</a>
                <a href="" class="btn bg--tertiary">LOGO</a>
            </div>
            <div class="tag__buttons">
                <a href="" class="btn bg--tertiary">VECTOR</a>
                <a href="" class="btn bg--tertiary">SOCIAL MEDIA</a>
            </div>
            </div>


         </div>
        
    </section>
    <?php }?>


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