<div class="col-lg-3">
    <form class="bs-example form-horizontal" action="/admin/add/" enctype="multipart/form-data" method="post">
        <fieldset> 
             <div class="col-lg-10">
                <input type="text" class="form-control" name="title" value="" placeholder="Titlu">
            </div>
            <div class="col-lg-10">
                <select name="types">
                    <option value="<?php echo "";?>"><?php echo "";?></option>
                </select>
            </div>
            <div class="col-lg-10">
                <textarea class="form-control" name="text2" id="wysiwyg" style="width:600px; height:300px;"></textarea>
            </div>
            <div class="col-lg-10">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</div>
