<?php get_header(); ?>
<?php get_sidebar(); ?>
<main class="container">
            <h3 class="mb-4">New Products</h3>
            <div class="d-flex flex-row flex-wrap">
                <?php while ( have_posts() ) : the_post();
                wp_link_pages(array(
                    'before' => '<div class="link btn-theme">' . esc_html__('Pages:', 'newsup'),
                    'after' => '</div>',
                ));?>
                <div class="product-item ml-2 mb-2">
                    <?php the_post_thumbnail('',array('class'=>'image-item')) ?>
                    <h5> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </div>
                <?php  endwhile;  ?>
            </div>
            <div></div>
        </main>
        <?php get_footer(); ?>