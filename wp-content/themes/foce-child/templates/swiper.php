<div class="swiper-container">
    <div class="swiper-wrapper">

     
    <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
                    <?php 
                    $main_character = $characters_query->posts[0];

                    $characters_query->next_post();
                    
                    if ( $characters_query->have_posts() ) {
                        foreach ( $characters_query->posts as $post ) {
                            setup_postdata( $post );
                            echo '<div class="swiper-slide">';
                            echo get_the_post_thumbnail( get_the_ID(), 'full' );
                            echo '<p>';
                            the_title();
                            echo'</p>';
                            echo '</div>';
                        }
                        wp_reset_postdata();
                    } else {
                        // no posts found
                    }
                    
                    ?>
    </div>
</div>
