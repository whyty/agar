<center>
	<div class='content_end_hr'><hr /></div>
	<div class='extra_informations_element'>
		<?php  require 'elements/extra_informations.php';  ?>
	</div>
</center>
</div>
<div class='designed_by'>
	<a  href='http://greuceansorana.wix.com/soranasdesign' target='_blank'>Grafica realizata de SORANA'S DESIGN</a>
</div>
<div id='footer'>
	<?php
	echo "<div class='footer_menu'>";

	echo $html->link(array(
		'text' => "ACAS&#258",
		'controller' => 'home',
		'action' => 'index',
		'class' => 'footer_menu_item',
		));

	echo $html->link(array(
		'text' => 'SERVICII',
		'controller' => 'service',
		'action' => 'index',
		'class' => 'footer_menu_item',
		));

	echo $html->link(array(
		'text' => 'CONTACT',
		'controller' => 'contact',
		'action' => 'index',
		'class' => 'footer_menu_item',
		));

	echo "<a class='footer_menu_item' href='http://rent-a-car-timisoara.com/blog/' target='_blank'>BLOG</a>";

	echo "</div>";

	echo "<div class='footer_information'>";
	echo "&copy2013 AGAR COMPANY";
	echo "</div>";

	?>


</div>



</body>
</html>