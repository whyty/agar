<div class="col-sm-10" style="margin-bottom: 10px;">
    <form class="bs-example form-horizontal" action="/admin/addImg/<? echo $id?>" enctype="multipart/form-data" method="post">
        <fieldset> 
            <div class="col-lg-10"> 
                <input type="file" name="file" id="file"> 
            </div>
            <br/>
            <div class="col-lg-10">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </fieldset>
    </form>
    
</div>
<?php

        if(count($pictures) > 0){
            foreach($pictures as $picture){
    ?>
<div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="/gallery/<? echo $picture['image']?>" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <a href="/admin/delImg/<? echo $picture['id']?>" >Sterge</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
    
  
    <?php 
            }
        } ?>