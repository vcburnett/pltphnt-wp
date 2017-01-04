<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- My code -->
<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">

<!-- Scripts -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.min.js"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox/jquery.fancybox.css" type="text/css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
			'padding'		: 0,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none'
		});
	});
</script>

<!-- GTM dataLayer -->
<script> dataLayer = []; </script>
<!-- end/ My code -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<?php include_once("modules/gtm.php"); ?>

	<nav id="main-menu">
		<?php include_once("modules/nav.php") ?>
	</nav>
