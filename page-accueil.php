<?php theme_include('header'); ?>

    <?php while(categories()): 
        switch (category_slug()) {
            case 'atlas'; $atlas = category_title(); $atlas_desc = category_description(); break;
            case 'histoires'; $histoires = category_title(); $histoires_desc = category_description(); break;
            case 'carto'; $carto = category_title(); $carto_desc = category_description(); break;
            case 'art'; $art = category_title(); $art_desc = category_description(); break;
            case 'ressources'; $ressources = category_title(); $ressources_desc = category_description(); break;
            case 'event'; $event = category_title(); $event_desc = category_description(); break;
        }
    endwhile; ?>

    <div class='wrap-main'>
        <section class='mosaic'>
            <a href='<?php echo base_url(); ?>atlas-du-rouergue' class='atlas'>
                <div class='content'>
                    <h1><?php echo $atlas ?></h1>
                    <h3><?php echo $atlas_desc ?></h3>
                </div>
            </a><!--

            --><a href='<?php echo base_url(); ?>histoires' class='histoires'>
                <div class='content'>
                    <h1><?php echo $histoires ?></h1>
                    <h3><?php echo $histoires_desc ?></h3>
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

            --><a href='<?php echo base_url(); ?>evenements' class='event'>
                <div class='content'>
                    <h1><?php echo $event ?></h1>
                    <h3><?php echo $event_desc ?></h3>
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