<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        <meta name="description" content="<?php echo site_description(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#303336">
        <meta name="HandheldFriendly" content="True">
        
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

        <link rel="stylesheet" href="<?php echo theme_url('style/fonts.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('style/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('style/main.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('style/res/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

        <link rel="stylesheet" href="reset.css" />
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="fonts.css" />
        <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js'></script>
        <script>
            function dropDown() {
                document.getElementById("menu-drpdwn").classList.toggle("show");
                document.getElementById("menu-btn").classList.toggle("show");
            }
            
            window.onclick = function(event) {
              if (!event.target.matches('#menu-btn')) {

                var dropdowns = document.getElementsByClassName("drpdwn");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
        </script>

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
    </head>