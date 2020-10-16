<?= get_header() ?>

<main id="content">
    
    <div class="container">
        <div class="page-header">
            <h1 class='the-title'><?= the_title() ?></h1>
            <p>Here where you can find bunch of helpful articles.</p>
        </div>
    <?php
    $post_type = 'post';
    
    // Get all the taxonomies for this post type
    $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
    
    foreach( $taxonomies as $taxonomy ) :
    
        // Gets every "category" (term) in this taxonomy to get the respective posts
        $terms = get_terms( $taxonomy );
    
        foreach( $terms as $term ) : ?>
    
            <?php
            $args = array(
                    'post_type' => $post_type,
                    'posts_per_page' => 3,  //show all posts
                    'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'field' => 'slug',
                            'terms' => $term->slug,
                        )
                    )
    
                );
            $posts = new WP_Query($args);
    
            if( $posts->have_posts() ): ?> 
            
            <h3 class='category-name'><?php echo $term->name; ?> &rsaquo;&rsaquo;</h3>
            <div class="category-posts">
                <div class="row">
                <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
                    <div class="col-md-4">
                        <div class="card">
                            <?php if(has_post_thumbnail()) { ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="" class="card-img-top">
                            <?php } else { ?>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/default-img.png" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" width="110" height="110" />
                            <?php } ?>                        
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="<?= get_the_permalink() ?>"><?php  echo get_the_title(); ?></a>
                                </h4>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                </div>

            </div>
    
        <?php endforeach;
    
    endforeach; ?>
    </div>
</main>

<?= get_footer() ?>