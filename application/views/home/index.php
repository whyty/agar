<?php

echo "<center>";

echo "<img class='banner' src='".URL."public/images/bannere/banner_homepage.jpg' alt=''>";

echo"<div class='content_body'>";

foreach ($home_articles as $article){
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





