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

echo "<img class='banner_service' src='".URL."public/images/bannere/banner_imobiliare.jpg' alt=''>"; ?>



<div class='content_body'>
	<?php
	echo "<img class='linie_neagra' src='".URL."public/images/linie_neagra.png' alt=''>"; 

	echo "<div class='side_data'>";
	echo "<div class ='image_link'>";
	echo "<a href='http://roimobiliare.net/' target='_blank'><img class='image_link_image' src='".URL."public/images/additional_images/imobiliare.png' alt=''></a>"; 
	echo "<div class='image_link_text3'><a href='http://roimobiliare.net/' target='_blank'>VIZITEAZA PAGINA</br> DE IMOBILIARE</a></div>"; 
	echo "</div>";
	echo "</div>";

	?>

	<div class ='blocks'>

		<div class='service_block'>
			<div class = 'service_content_title'>
				<div class='service_content_title_hr'><hr /></div>
				VANZARI TERENURI
			</div>
			AGAR COMPANY detine o experienta de peste 7 ani in domeniul vanzarilor de terenuri intravilane si extravilane in regiunea de vest a tarii.</br>
			Printre liderii pe piata imobiliara din regiune, pe langa o oferta de vanzare variata, compania va ofera consultanta si intermediere in achizitionarea sau vanzarea de terenuri.</br>
			Pentru detalii, va rugam consultati <div class='text_link'><a href='http://roimobiliare.net/terenuri.php' target='_blank'>pagina</a></div> dedicata.</br>
			<div class='read_more_links_service'><a  href='http://roimobiliare.net/terenuri.php' target='_blank'>CITESTE MAI MULT</a></div>
		</div>

		<div class='service_block'>
			<div class = 'service_content_title'>
				<div class='service_content_title_hr'><hr /></div>
				VANZARI LOCUINTE
			</div>
			Daca doriti sa achizitionati o lucuinta, compania noastra va ofera mai multe solutii, calibrate pe dorintele dvs. AGAR COMPANY ofera spre vanzare locuinte in Timisoara la preturi fara competitie!</br>
			Pentru detalii, va rugam consultati <div class='text_link'><a href='http://roimobiliare.net/apartamente.php' target='_blank'>pagina</a></div> dedicata.</br>
			<div class='read_more_links_service'><a  href='http://roimobiliare.net/apartamente.php' target='_blank'>CITESTE MAI MULT</a></div>
		</br></br></br></br></br></br></br>
	</div>

</div>


</center>


