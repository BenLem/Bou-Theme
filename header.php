<?php include('head.php'); ?>    
	<body class="<?php echo body_class(); ?>">
        <header class="main">            
            <a href="<?=base_url()?>" class="logo"></a>
            
            <nav class="menu">
                <div onclick="dropDown()" id="menu-btn" class="drpdwn">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    Menu
                </div>

                <ul id="menu-drpdwn" class="drpdwn">
                    <?php if(has_menu_items()): while(menu_items()): ?>
						<li>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
				    <?php endwhile; endif; ?>
                </ul>
            </nav>
        </header>
