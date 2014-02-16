<form class="bs-example form-horizontal" action="/admin/edit/<?=$data['id']?>" enctype="multipart/form-data" method="post">
 		<fieldset> 
		 	<div class="col-lg-10">
		    	<input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>" placeholder="Ce plm vrei u ">
		    </div>
		    <div class="col-lg-10">
		    <textarea class="form-control" name="text2" id="wysiwyg" style="width:600px; height:300px;">
		    	<?php echo $data['text']; ?>
		    </textarea>
		       </div>
		       <div class="col-lg-10"> <input class="btn btn-primary" type="submit" name="submit" value="Submit">
 </div>
		</fieldset>
    </form>