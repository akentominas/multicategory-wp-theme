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
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ) );
                    
                    foreach( $categories as $category ) {
                        $category_link = sprintf( 
                            '<a href="%1$s" alt="%2$s">%3$s</a>',
                            esc_url( get_category_link( $category->term_id ) ),
                            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                            esc_html( $category->name )
                        );

                         // Get the ID of a given category
			$category_id = get_cat_ID(  $category->name );
                        // Get the URL of this category
                        $category_link = get_category_link( $category_id );

                        ?>

                        <div class="boxxx">
                        <a href="<?php echo esc_url( $category_link ); ?>">
                            <div class="module mid" style="background: 
                                linear-gradient(
                                rgba(0, 0, 0, 0.6),
                                rgba(0, 0, 0, 0.6)
                                ),
                                url(<?php echo $category->description ?>);
                                background-size: 100% 100%;")>
                                <h2><?php echo $category->name; ?></h2>
                                <!-- count category posts <? echo $category->count ?> -->
                            </div>
                        </a>
                        </div>
                        
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
