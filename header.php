<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php is_front_page() ? bloginfo('title') : wp_title('')?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <?php wp_head() ?>
</head>
<body data-barba="wrapper">
    <!--Header-->
    <div
      class="fixed top-0 left-0 z-50 w-full h-screen scale-y-0 bg-dark"
      id="page-transition"
    ></div>

    <header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="headerBrand">
                <img src="<?php echo get_template_directory_uri()?>/img/home/Brand.svg" alt="img"> 
                <h3>Creative <span>Visual</span> Design</h3> 
            </div>
                <nav>
                    <ul class="header__nav" >
                    <?php wp_nav_menu(array(
                'theme_location' => 'header_menu'
            ))?>
                    </ul>
                </nav>
                         <!-- Toggle Menu -->
                <div class="toggle__menu">
                <span></span>
                <span></span>
                <span></span>
                </div>
        </div>
    </div>
    </header>