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

echo "<img class='banner_service' src='".URL."public/images/bannere/banner_constructii.jpg' alt=''>"; ?>



<div class='content_body'>

	<?php echo "<img class='linie_neagra' src='".URL."public/images/linie_neagra.png' alt=''>"; ?>

	<div class='side_data'>
            
            <?php
            
           
                if(count($projects_i) > 0){
                    foreach($projects_i as $project){
                  
                        echo "<div class='constructions_project_photos'>
                            <a href='".URL."service/projects'><img class='construction_photo' src='".URL."public/projects/".$project['image']."' alt=''></a>
                            <div class='contruction_photo_text'>
                                    <div class='construction_photo_text_title'>
                                            <div class='construction_photo_end_hr'><hr /></div>
                                            ".$project['title']."
                                    </div>
                                    ".$project['text']."
                            </div>
                        </div>";
                    }
                    echo "<a class='link_projects' href='".URL."service/projects'>Portofoliu</a>";
                }
            ?>
		
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
    </div>

</center>



