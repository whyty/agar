<div class="col-lg-3">
    <form class="bs-example form-horizontal" action="/admin/addP/" enctype="multipart/form-data" method="post">
        <fieldset> 
             <div class="col-lg-10">
                <input type="text" class="form-control" name="title" value="" placeholder="Titlu">
            </div>
            <div class="col-lg-10">
                <textarea class="form-control" name="text2" id="cleditor"></textarea>
            </div>
            <div class="col-lg-10"> 
                <input type="file" name="file" id="file"> 
            </div>
            <div class="col-lg-10">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</div>