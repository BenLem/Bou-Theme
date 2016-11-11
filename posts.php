<?php theme_include('header'); ?>

    <article class="main page">
        
        <?php if(has_posts()):
            while(posts()): ?>
                <article class="post <?php echo article_category_slug(); ?>">
                    <h2 class="title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>

                    <div class="excerpt">
                        <p><?php echo article_description(); ?></p>
                    </div>

                    <footer>
                        <div class="bar"><p><?=date("d/m/Y", article_time());?></p></div>

                        <a class="read-more" href="<?php echo article_url(); ?>">Lire la suite</a>
                    </footer>
                </article>
            <?php endwhile; 
            if(has_pagination()): ?>
                <nav class="pagination">
                    <div class="previous">
                        <?php echo posts_prev('<span style=\'opacity: .4\'>&larr;</span> Précédent'); ?>
                    </div><!--
                    --><div class="next">
                        <?php echo posts_next('Suivant <span style=\'opacity: .4\'>&rarr;</span>'); ?>
                    </div>
                </nav>
            <?php endif;
        endif; ?>
    </article>

<?php theme_include('footer'); ?>
