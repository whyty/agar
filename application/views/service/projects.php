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

echo "<img class='banner_service2' src='".URL."public/images/bannere/banner_constructii.jpg' alt=''> <br/>"; ?>

<div class='content_body'>

	<?php echo "<img class='linie_neagra' src='".URL."public/images/linie_neagra.png' alt='' style='width:90%'>"; ?>

                <?php 
                    if(count($proiecte) > 0){
                        foreach($proiecte as $proiect){
                                                          echo "
                                <div class='home_block'>
                                    <img class='construction_photo' src='".URL."public/projects/".$proiect['image']."' alt=''>
                                    <div class='contruction_photo_text'>
                                                <div class='construction_photo_text_title'>
                                                        <div class='construction_photo_end_hr'><hr /></div>
                                                        ".$proiect['title']."
                                                </div>
                                        ".$proiect['text']; 
                              echo"<a class='link_gallery' rel='prettyPhoto[pp_gal".$proiect['id']."]' href='".URL."public/projects/".$proiect['image']."'>GALERIE</a>";
                              echo"
                                </div>
                              </div>
                            ";
                            }
                    }
                ?>
               
                
                
                
</center>