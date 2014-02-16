<?php

echo "<center>";

echo "<div class='secondary_menu'>";

echo $html->link(array(
                        'text' => 'CONSTRUCTII',
                        'controller' => 'service',
                        'action' => 'constructions',
                        'class' => 'secondary_menu_item',
                        ));
echo $html->link(array(
			'text' => 'RENT A CAR',
                        'controller' => 'service',
                        'action' => 'rentacar',
                        'class' => 'secondary_menu_item',
			));
echo $html->link(array(
			'text' => 'PARC AUTO',
                        'controller' => 'service',
                        'action' => 'parcauto',
                        'class' => 'secondary_menu_item',
			));
echo $html->link(array(
			'text' => 'APARTHOTEL',
                        'controller' => 'service',
                        'action' => 'aparthotel',
                        'class' => 'secondary_menu_item',
			));
echo $html->link(array(
			'text' => 'IMOBILIARE',
                        'controller' => 'service',
                        'action' => 'imobiliare',
                        'class' => 'secondary_menu_item',
			));
echo $html->link(array(
			'text' => 'PLAY & WIN',
                        'controller' => 'service',
                        'action' => 'playandwin',
                        'class' => 'secondary_menu_item',
			));
echo $html->link(array(
			'text' => 'CONSULTANTA',
                        'controller' => 'service',
                        'action' => 'consultanta',
                        'class' => 'secondary_menu_item',
                        ));

echo "</div>";

echo "<img class='banner_service' src='".URL."public/images/bannere/banner_play_and_win.jpg' alt=''>"; ?>



<div class='content_body'>
	<?php
	echo "<img class='linie_neagra' src='".URL."public/images/linie_neagra.png' alt=''>"; 

	echo "<div class='side_data'>";
	echo "<div class ='image_link'>";
	echo "<a href='http://play-win.ro/' target='_blank'><img class='image_link_image' src='".URL."public/images/additional_images/play_and_win.png' alt=''></a>"; 
	echo "<div class='image_link_text3'><a href='http://play-win.ro/' target='_blank'>PARTICIPA ACUM</a></div>"; 
	echo "</div>";
	echo "</div>";

	?>

	<div class ='blocks'>

		Ne cerem scuze, aceasta sectiune nu este disponibila momentan.

	</div>

</br></br></br></br></br></br></br>

</center>


