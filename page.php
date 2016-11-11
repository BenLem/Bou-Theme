<?php theme_include('header'); ?>

    <article class="main page alone <?php echo page_slug(); ?>">
        <header>
            <h1 class="title"><?php echo page_title(); ?></h1>
        </header>
        
        <div class="content">
            <?php echo page_content(); ?>
        </div>
    </article>

<?php theme_include('footer'); ?>
