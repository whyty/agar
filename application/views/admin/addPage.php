<div class="col-lg-3">
    <form class="bs-example form-horizontal" action="/admin/add/" enctype="multipart/form-data" method="post">
        <fieldset> 
             <div class="col-lg-10">
                <input type="text" class="form-control" name="title" value="" placeholder="Titlu">
            </div>
            <div class="col-lg-10">
                <select name="types">
                    <?php
                        
                        foreach($types as $type){
                            echo'<option value="' . $type['id'] . '">'. $type['name'] .'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-lg-10">
                <label>
                    <input name="cols" type="checkbox" value="yes"> Columns
                </label>
            </div>
            <div class="col-lg-10">
                <textarea class="form-control" name="text2" id="cleditor" style="width:600px; height:300px;"></textarea>
            </div>
            <div class="col-lg-10">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</div>
