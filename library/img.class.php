<?php 
class Img {

	function __construct(){

	}
        
        function add($file,$folder,$rand){
             $destination=$_SERVER['DOCUMENT_ROOT']."/public/".$folder."/" . $rand . "-" . $file["file"]["name"];
             move_uploaded_file($file["file"]["tmp_name"],  $destination);
        }
        
        function remove($file,$folder){
            unlink($folder . "/" . $file);
        }
}