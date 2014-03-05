<html>
<head>
	<title> <?php echo $title ; ?> </title>
	
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>resources/css/prettyPhoto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>resources/css/default.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo URL; ?>resources/js/agar.js"></script> 
	<script src="<?php echo URL; ?>resources/js/readmore.js"></script>
	<script src="<?php echo URL; ?>resources/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });
</script>
        
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div id='header'>
		<?php 
		
		echo "<img class='logo' src='".URL."public/images/logo.png' alt=''>";

		echo "<div class='primary_menu'>";
		echo $html->link(array(
			'text' => "ACASA",
			'controller' => 'home',
			'action' => 'index',
			'class' => 'primary_menu_item',
			));
 
		echo $html->link(array(
			'text' => 'SERVICII',
			'controller' => 'service',
			'action' => 'index',
			'class' => 'primary_menu_item',
			));

		echo $html->link(array(
			'text' => 'CONTACT',
			'controller' => 'contact',
			'action' => 'index',
			'class' => 'primary_menu_item',
			));
 
		echo "<a class='primary_menu_item' href='http://rent-a-car-timisoara.com/blog/' target='_blank'>BLOG</a>";

		echo "</div>";

		echo "<div class='header_hr'><hr /></div>";
		echo "<div class='menu_hr'><hr /></div>";

		?>

	</div>

	<div id='content'>
