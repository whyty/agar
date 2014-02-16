<?php

echo "<center>";

echo "<div class='secondary_menu'>";

echo $html->link(array(
                        'text' => 'CONSTRUC&#538II',
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
			'text' => 'CONSULTAN&#538&#x102',
                        'controller' => 'service',
                        'action' => 'consultanta',
                        'class' => 'secondary_menu_item',
                        ));
                    
echo "</div>";

echo "<img class='banner_service' src='".URL."public/images/bannere/banner_constructii.jpg' alt=''>"; ?>



<div class='content_body'>

	<?php echo "<img class='linie_neagra' src='".URL."public/images/linie_neagra.png' alt=''>"; ?>

	<div class='side_data'>
		<div class='constructions_project_photos'>
			<?php	echo "<img class='construction_photo' src='".URL."public/images/construction_images/ultima_lucrare.jpg' alt=''>"; ?>
			<div class='contruction_photo_text'>
				<div class='construction_photo_text_title'>
					<div class='construction_photo_end_hr'><hr /></div>
					REABILITARE BLOC DE LOCUINTE
				</div>
				Reabilitarea unui bloc de locuinte din zona centrala a orasului, ce a inclus: izolare termica, constructia acoperisului si mansardare, renovarea fatadei.
			</div>
		</div>


		<div class='constructions_project_photos'>
			<?php	echo "<img class='construction_photo' src='".URL."public/images/construction_images/penultima_lucrare.jpg' alt=''>"; ?>
			<div class='contruction_photo_text'>
				<div class='construction_photo_text_title'>
					<div class='construction_photo_end_hr'><hr /></div>
					CONSTRUCTIE CASA PENTRU LOCUIT
				</div>
				Constructia unei vile cu etaj si mansarda.
			</div>
		</div>
	</div>



	<div class ='blocks'>
            <?php
                foreach($articles_i as $article){
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
    </div
</center>



