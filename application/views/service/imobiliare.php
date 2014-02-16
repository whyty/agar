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
            <?php
                foreach($articles_im as $article){
                    if($article['cols']!='yes'){
                        echo '<div class="service_block">';
                        if($article['title']!=''){
                            echo "<div class = 'service_content_title'>
				<div class='service_content_title_hr'><hr /></div>
				" . $article['title'] . "
			</div>";
                        }
                            echo "<div class='slide_service'>";
                            echo $article['text'];
                            echo '</div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>

</div>


</center>


