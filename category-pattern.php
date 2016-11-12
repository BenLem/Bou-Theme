    <?php while(categories()): 
        switch (category_slug()) {
            case 'atlas'; $atlas = category_title(); $atlas_desc = category_description(); break;
            case 'histoires'; $histoires = category_title(); $histoires_desc = category_description(); break;
            case 'carto'; $carto = category_title(); $carto_desc = category_description(); break;
            case 'art'; $art = category_title(); $art_desc = category_description(); break;
            case 'ressources'; $ressources = category_title(); $ressources_desc = category_description(); break;
            case 'event'; $event = category_title(); $event_desc = category_description(); break;
        }
    endwhile;
    
    $cat = array (
        'atlas' => $atlas,
        'histoires' => $histoires,
        'carto' => $carto,
        'art' => $art,
        'ressources' => $ressources,
        'event' => $event);
    $desc = array (
        'atlas' => $atlas_desc,
        'histoires' => $histoires_desc,
        'carto' => $carto_desc,
        'art' => $art_desc,
        'ressources' => $ressources_desc,
        'event' => $event_desc);

    //Nombre d'articles par page :
    $max_article_count = 3;

    $article_count = array ('0' => 0, '1' => 0);
    $more = false;
    ?>

    <article class="main page <?=$page;?>">
        <header>
            <h1 class="title"><?=$cat[$page];?></h1>
            <?php if ($desc[$page] == NULL) :;
            else :?>
                <h3 class="cat"><?php echo $desc[$page] ?></h3>
            <?php endif;?>            
        </header>
        
        <?php while(latest_posts()): 
            
            if (article_custom_field('sticky')=='true' and article_category_slug()==$page): ?>

                <article class="post <?php echo article_category_slug();?>">
                    <h2 class="title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>

                    <div class="excerpt">
                        <p><?php echo article_description(); ?></p>
                    </div>

                    <footer>
                        <div class="bar sticky"><p>Épinglé</p></div>

                        <a class="read-more" href="<?php echo article_url(); ?>">Lire la suite</a>
                    </footer>
                </article>
        
        <?php elseif(article_custom_field('sticky')=='true!'): ?>
            
                <article class="post <?php echo article_category_slug();?>">
                    <h2 class="title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>

                    <div class="excerpt">
                        <p><?php echo article_description(); ?></p>
                    </div>

                    <footer>
                        <div class="bar sticky"><p>Épinglé</p></div>

                        <a class="read-more" href="<?php echo article_url(); ?>">Lire la suite</a>
                    </footer>
                </article>
    
        <?php endif; endwhile; ?>
        
        <?php while(latest_posts()): 
        
            if (article_category_slug()==$page and $article_count[0] <= $max_article_count) {++$article_count[0];};
            
            if ($article_count[0] > $max_article_count) {$more = true;};
        
            if(article_category_slug()==$page and article_category_slug() <> 'event' and $article_count[1] < $max_article_count and article_custom_field('sticky')<>'true'):?>
                    
                <article class="post <?php echo article_category_slug();?>">
                    <h2 class="title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>

                    <div class="excerpt">
                        <p><?php echo article_description(); ?></p>
                    </div>

                    <footer>
                        <div class="bar"><p><?=date("d/m/Y", article_time());?></p></div>

                        <a class="read-more" href="<?php echo article_url(); ?>">Lire la suite</a>
                    </footer>
                </article>
                <?php ++$article_count[1];

            elseif (article_category_slug()==$page and article_category_slug()=='event') :?>
                <article class="post <?php echo article_category_slug();?>">
                    <h2 class="title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>

                    <div class="excerpt">
                        <div class='desc'><p><?php echo article_description(); ?></p></div><!--

                        --><div class='infos'>
                            <ul>
                                <li class='date'><?php echo article_custom_field('date'); ?></li>
                                <li class='time'><?php echo article_custom_field('heure'); ?></li>
                                <li class='place'><?php echo article_custom_field('place'); ?></li>
                                <li class='city'><?=article_custom_field('city');?></li>
                            </ul>

                            <a class="read-more" href="<?php echo article_url(); ?>">En savoir plus</a>
                        </div>
                    </div>
                </article>
        <?php endif; endwhile;
                
        if ($article_count[0] == 0 and $page<>'event'):?>
            <article class="post error">
                <h2 class="title">Erreur</h2>

                <div class="excerpt">
                    <p>Il n'y a pas d'article dans cette catégorie</p>
                </div>
            </article>
        <?php elseif ($article_count[0] == 0 and $page=='event'):?>
            <article class="post">
                <h2 class="title">Pas d'evenements prévus</h2>

                <div class="excerpt">
                    <p><?php echo site_meta('events'); ?></p>
                </div>
            </article>
        <?php endif; if ($more == true) {?>
            <div class="more">                
                <a class='more <?=$page?>' href="<?=base_url();?>category/<?=$page;?>">Voir tous les articles de cette catégorie</a>
            </div>
        <?php };?>
    </article>