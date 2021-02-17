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
                            <div class="blog-card spring-fever" style="background-image: url('<?php echo $category->description ?>')"; >
                                <div class="cat-name"><?php echo $category->name; ?></div>
                                <div class="cat-banner"><h1><? echo $category->count ?> articles</h1></div>
                            </div><!-- /.blog-card -->
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