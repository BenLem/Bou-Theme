<?php theme_include('header'); ?>

        <article class="main <?=article_category_slug();?>" id="article-<?php echo article_id(); ?>">
            <header>
                <h1 class="title"><?php echo article_title(); ?></h1>
                <h3 class="cat"><?php echo article_category(); ?></h3>
            </header>
            
            <div class="content">
                <div class="infos"><p class="left">Écrit par <?=article_author();?> et publié le <?=date("d M Y", article_time());?></p> <p class="right"><?=reading_time();?> de lecture</p></div>
                
                <?php echo article_markdown(); ?>
            </div>            
        </article>

<?php theme_include('footer'); ?>
