<?php theme_include('header'); ?>

    <article class="main page search">
        <header>
            <h1 class="title">&ldquo; <?php echo search_term(); ?> &rdquo;</h1>
            <h3 class="cat">Articles correspondant à votre recherche :</h3>
        </header>

        <?php if(has_search_results()): ?>
        <ul class="search-items">
            <?php while(search_results()): ?>
            <li><a href="<?php echo search_item_url(); ?>"><?php echo search_item_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
        
        <?php if(has_search_pagination()): ?>
	   <nav class="pagination">
            <div class="previous">
                <?php echo search_prev('<span style=\'opacity: .4\'>&larr;</span> Précédent'); ?>
            </div><!--
            --><div class="next">
                <?php echo search_next('Suivant <span style=\'opacity: .4\'>&rarr;</span>'); ?>
            </div>
        </nav>
        <?php endif; ?>

        <?php else: ?>
            <article class="post">
                <h2 class="title">Recherche</h2>

                <div class="excerpt">
                    <p style='margin-top: 10px;'>Malheureusement, il n'y a pas de résultats correspondant à votre recherche</p>
                </div>
            </article>
        <?php endif; ?>
    </article>

<?php theme_include('footer'); ?>