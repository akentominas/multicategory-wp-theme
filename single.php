<?php

get_header();

 ?>
<main>
        <section class="single-main">
            <div class="single-post-left">

            </div>
            <div class="single-post-center">
                <div class="wrapper-single-post">

                <?php
                    while(have_posts()) {
                        the_post();
                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                        
                        if ( !have_comments()) {
                            $comments_count = 0;
                        } else {
                            $comments_count = 3;
                        }
                        ?>
                            <div class="single-post-banner-wrapper">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'responsive-thumbnail' ) ); ?>
                                <div class="single-post-likes-comments">
                                    <div class="far fa-heart"></div>
                                    3
                                    <!-- <i class="far fa-comments"></i>
                                    <?php echo get_comments_number(); ?> -->
                            </div>
                            </div>                        
                            <div class="single-post-info">
                            <div>
                                <img src="<?php echo $get_author_gravatar; ?>" alt="" class="img"></img>
                            </div>
                            <div><?php the_author() ?></div>
                            <div class="">
                                    <i class="far fa-calendar-alt"></i>
                                    <?php echo get_the_date('Y M d'); ?>
                            </div>
                        </div>
                        <div class="single-post-content">
                            <h1 class="single-post-title"><?php the_title(); ?></h1>
                            <p><?php the_content() ?></p>
                        </div>
                        <!-- <div class="single-post-author-bio">
                            Authon Bio Here
                        </div> -->
                        <!-- <div class="single-post-comment-section">
                            
                        </div> -->
                      
                       <?php
                    }

                    
                    echo paginate_links();
                    ?>


                </div>
            </div>
            <div class="single-post-right">

            </div>
        </section>
    </main>
   

<?php get_footer();

?>