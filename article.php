<?php theme_include('header'); ?>

        <article class="main single <?=article_category_slug();?>" id="article-<?php echo article_id(); ?>">
            <header>
                <h1 class="title"><?php echo article_title(); ?></h1>
                <h3 class="cat"><?php echo article_category(); ?></h3>
            </header>
            
            <div class="content">
                <div class="infos"><p class="left">Écrit par <?=article_author();?> et publié le <?=date("d M Y", article_time());?></p> <p class="right"><?=reading_time();?> de lecture</p></div>
                
                <?php echo article_markdown(); ?>
                
                <aside class='event-infos'>
                    <ul>
                        <li class='date'><?php echo article_custom_field('date'); ?></li>
                        <li class='time'><?php echo article_custom_field('heure'); ?></li>
                        <li class='place'><?php echo article_custom_field('place'); ?></li>
                        <li class='city'><?=article_custom_field('city');?></li>
                    </ul>
                </aside>
                
                <?php if(comments_open()): ?>
                <section class="comments">
                    <h2 class='title'>Commentaires</h2>
                    <?php if(has_comments()): ?>
                    <ul class="commentlist">
                        <?php while(comments()): ?>
                        <li class="comment" id="comment-<?php echo comment_id(); ?>">
                            <div class='comment-content <?php if(comment_email()==article_author_email()){echo 'author';} ?>'>                                    
                                <div class='comment-infos'><h2 class='author'><?php echo comment_name(); ?></h2><time><?php echo relative_time(comment_time()); ?></time></div>
                                
                                <?php $Comment = new Parsedown(); echo $Comment->text(comment_text()); ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
                        <?php echo comment_form_notifications(); ?>

                        <p class="author">
                            <?php echo comment_form_input_name('placeholder="Nom"'); ?>
                            <?php echo comment_form_input_email('placeholder="Adresse mail (non publiée)"'); ?>
                        </p>

                        <p class="textarea">
                            <?php echo comment_form_input_text('placeholder="Votre commentaire"'); ?>
                            <span class='format'><span class='right'>(Vous pouvez formater en <a href='<?php echo base_url(); ?>formatage-des-commentaires' target='_blank'>Markdown</a>)</span></span>
                        </p>

                        <p class="submit">
                            <?php echo comment_form_button('Poster votre commentaire'); ?>
                        </p>
                    </form>

                </section>
            <?php endif; ?>
            </div>            
        </article>

<?php theme_include('footer'); ?>
