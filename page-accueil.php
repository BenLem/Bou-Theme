<?php theme_include('header'); ?>

    <?php while(categories()): 
        switch (category_slug()) {
            case 'atlas'; $atlas = category_title(); $atlas_desc = category_description(); break;
            case 'saint-leons'; $saint_leons = category_title(); $saint_leons_desc = category_description(); break;
            case 'histoires'; $histoires = category_title(); $histoires_desc = category_description(); break;
            case 'migrations'; $migrations = category_title(); $migrations_desc = category_description(); break;
            case 'carto'; $carto = category_title(); $carto_desc = category_description(); break;
            case 'art'; $art = category_title(); $art_desc = category_description(); break;
            case 'ressources'; $ressources = category_title(); $ressources_desc = category_description(); break;
            case 'actualites'; $actualites = category_title(); $actualites_desc = category_description(); break;
        }
    endwhile; ?>

    <div class='wrap-main'>
        <?php while(latest_posts()): 
            
            if (article_custom_field('sticky')=='true!' and article_category_slug()=='actualites'): ?>

                <article class="sticky-actualites">
                    <a href="<?=article_url()?>">
                        <h3 class='actualites'><span class='coming-soon'>Actualité ... </span><span class='title'><?php echo article_title(); ?></span></h3>
                        <span class='more'>En savoir plus</span>
                    </a>
                </article>
        <?php endif; endwhile; ?>
        <section class='mosaic'>
            <a href='<?php echo base_url(); ?>atlas-du-rouergue' class='atlas'>
                <div class='content'>
                    <h1><?php echo $atlas ?></h1>
                    <h3><?php echo $atlas_desc ?></h3>
                </div>
            </a><!--

            --><a href='<?php echo base_url(); ?>saint-leons' class='saint-leons'>
                <div class='content'>    
                    <h1><?php echo $saint_leons ?></h1>
                    <h3><?php echo $saint_leons_desc ?></h3>
                </div>
            </a><!--

            --><a href='<?php echo base_url(); ?>histoires' class='histoires'>
                <div class='content'>
                    <h1><?php echo $histoires ?></h1>
                    <h3><?php echo $histoires_desc ?></h3>
                </div>
            </a><!--

            --><a href='<?php echo base_url(); ?>migrations' class='migrations'>
                <div class='content'>    
                    <h1><?php echo $migrations ?></h1>
                    <h3><?php echo $migrations_desc ?></h3>
                </div>
            </a><!--

            --><a href='<?php echo base_url(); ?>cartographie' class='carto'>
                <div class='content'>
                    <h1><?php echo $carto ?></h1>
                    <h3><?php echo $carto_desc ?></h3>
                </div>
            </a><!--

            --><a href='<?php echo base_url(); ?>art' class='art'>
                <div class='content'>    
                    <h1><?php echo $art ?></h1>
                    <h3><?php echo $art_desc ?></h3>
                </div>
            </a><!--

            --><a href='<?php echo base_url(); ?>ressources' class='ressources'>
                <div class='content'>
                    <h1><?php echo $ressources ?></h1>
                    <h3><?php echo $ressources_desc ?></h3>
                </div>
            </a><!--

            --><a href='<?php echo base_url(); ?>actualites' class='actualites'>
                <div class='content'>
                    <h1><?php echo $actualites ?></h1>
                    <h3><?php echo $actualites_desc ?></h3>
                </div>
            </a>

            <a href='<?php echo base_url(); ?>a-propos' class='about'>
                <div class='content'>
                    <h1>À propos</h1>
                </div>
            </a>
        </section>
    </div>

<?php theme_include('footer'); ?>