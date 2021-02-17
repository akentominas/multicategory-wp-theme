<?php

get_header();

 ?>
<main>
        <section class="hero">
            <div class="home-sidebar-left">

            </div>
            <div class="home-categories-center">
                <div class="wrapper">

                <?php
                    while(have_posts()) {
                        the_post();
                        ?>
                        <a href="<?php echo the_permalink()?>">
                        <div class="card">
                            <img class="card-image" src="https://images.unsplash.com/photo-1547744037-b80bdba1b6f0">
                            <div class="likes-comments">
                                    <div class="far fa-heart"></div>
                                    3
                                    <i class="far fa-comments"></i>
                                    4
                            </div>
                            </img>
                            <div class="card-body">
                                <div class="card-post-tags">
                                    <?php
                                     //returns array of objects
                                    $tags = get_the_tags();
                                    //make sure we have some
                                    if ($tags) {

                                        //foreach entry in array of tags, access the tag object
                                        foreach( $tags as $tag ) {

                                        //echo the name field from the tag object 
                                        ?> 
                                        <h1></h1>
                                        <div class="card-post-tag"><?php echo $tag->name; ?></div>
                                        <?php 
                                        }
                                    }
                                    ?>
                                </div>
                                <h1 class="card-title"><?php echo the_title(); ?></h1>
                                <div class="card-post-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <?php echo get_the_date('M Y d'); ?>
                                </div>
                                <p class="card-content"><?php the_excerpt(); ?></p>
                                <div class="card-post-info">
                                    <div class="inner-card-post-info-left">
                                    <div>
                                        <img src="https://miro.medium.com/max/600/1*PiHoomzwh9Plr9_GA26JcA.png" alt="" class="img">
                                    </div>
                                    </div>
                                    <div class="inner-card-post-info-right">
                                    <?php the_author() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <?php
                    }

                    
                    echo paginate_links();
                    ?>


                </div>
            </div>
            <div class="home-sidebar-right">

            </div>
        </section>
    </main>
   

<?php get_footer();

?>