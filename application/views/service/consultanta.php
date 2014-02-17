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


echo "<img class='banner_service' src='".URL."public/images/bannere/banner_consultanta.jpg' alt=''>";

echo"<div class='content_body'>";

foreach ($articles_cs as $article){
    if($article['cols']=='yes'){
        echo "<div class='home_block'>";
        if($article['title']!=""){
            echo "<div class = 'home_content_title'>
                    <div class='home_content_title_hr'><hr /></div>";
            echo $article['title'];
            echo "</div>";
        }
            echo "<div class='slide'>";
            echo $article['text'];
            echo "</div>";
       echo "</div>";
    }
}
?>

</center>





