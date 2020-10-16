<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
    <div class="single">
        <div class="single-header">
            <h2 class="the-title">
                <?= the_title()  ?>
            </h2>
            <p>Posted by <?= the_author_posts_link() ?> at <?= get_the_date() ?></p>
        </div>
        <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="post-thumbnail">
        <div class="single-content">
            <?= the_content() ?>
        </div>
    </div>
</div>

<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>