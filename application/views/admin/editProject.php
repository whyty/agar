<div class="col-lg-3">
    <form class="bs-example form-horizontal" action="/admin/editP/<? echo $data['id']?>" enctype="multipart/form-data" method="post">
        <fieldset> 
             <div class="col-lg-10">
                <input type="text" class="form-control" name="title" value="<? echo $data['title']?>" placeholder="Titlu">
            </div>
            <div class="col-lg-10">
                <textarea class="form-control" name="text2" id="cleditor"><? echo $data['text']?></textarea>
            </div>
            <div class="col-lg-10"> 
                <input type="file" name="file" id="file"> 
            </div>
            <div class="col-lg-10">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </fieldset>
    </form>
    <?php
        if($data['image']!=''){
    ?>
    <br/>
    <div class="col-lg-10">
        <img src="/projects/<? echo $data['image']?>" width="300px" height="200px" />
        <br/>
        <a href="/admin/deleteImg/<? echo $data['id']?>">sterge</a>
    </div>
        <?php } ?>
</div>
