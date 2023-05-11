<?php get_header(); ?>
<?php get_sidebar(); ?>
<main class="container">
            <div class="d-flex justify-content-center">
                <div class="width-50p background-gray">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="width-50p">
                <?php the_post_thumbnail('',array('class'=>'width-100p')) ?>
                </div>
            </div>
        </main>
<?php get_footer(); ?>