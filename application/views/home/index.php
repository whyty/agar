<?php

echo "<center>";

echo "<img class='banner' src='".URL."public/images/bannere/banner_homepage.jpg' alt=''>";

echo"<div class='content_body'>";
$i = 1;
echo "<div>";
foreach ($home_articles as $article){
    
    if($article['cols']=='yes'){

        if($i >= 3 ){
           if($i % 3 == 0){
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
               echo "<div style='clear:both'></div>
                   </div><div>";
            }else{
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
       
        }else{
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
        $i++;
    }
}
 echo "<div style='clear:both'></div></div>";
?>

</center>
