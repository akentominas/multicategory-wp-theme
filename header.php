<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="main-head">
        <nav>
            <a href="<?php echo site_url('/') ?>"><h1 id="logo">stasdev</h1></a>
            <ul class="nav-links">
                <!-- <li><a href="#about">About</a></li> -->
                <li><a href="#" class="fab fa-facebook"></a></li>
                <li><a href="#" class="fab fa-youtube"></a></li>
                <li><a href="#" class="fab fa-instagram"></a></li>
                <!-- <li><a href="#work">Work</a></li>
                <li><a href="#contact">Contact</a></li> -->
               
            </ul>
            <button
                type="button"
                class="button btn-subscribe"
                >
                Subscribe
            </button>
            <div class="burger">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
            </div>
        </nav>
    </header>
