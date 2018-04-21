<article class="cell large-3 medium-4 small-12 xiong-bookbox">
    <a href="<?php the_permalink();?>">
        <div>
            <?php the_post_thumbnail(); ?>
        </div>
        <header>
            <h3><?php the_title( );?></h3>
            <strong><?php the_field('author');?></strong>
            
        </header>

    </a>
</article>