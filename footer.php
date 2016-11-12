        <footer class="main">
            <div class="content">
                <p class="left"><?php echo site_meta('footer', site_description()); ?></p>
            
                <form class="search" action="<?php echo search_url(); ?>" method="post">
                    <input type="search" id="term" name="term" placeholder="RECHERCHER" value="<?php echo search_term(); ?>">
                </form>

                <p class="copyright">&copy; <?php echo date('Y'); ?> Jean-Yves Bou - <a href="<?php echo base_url(); ?>mentions-legales">Mentions légales</a> - Powered by <a href='http://anchorcms.com'>Anchor</a> - Thème par Benjamin Lemoine</p>
                <a class='admin' href='<?php echo base_url();?>admin'>Administration</a>
            </div>
        </footer>
    </body>
</html>
