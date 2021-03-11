<?php 
if (isset($_FILES['fileData'])) 
{
	$image_name = $_FILES['fileData']['name'];
	$image_temp = $_FILES['fileData']['tmp_name'];
	$ext = explode('.',$image_name);
        $rename = time().'.'.$ext[1];
        $location = "images/".$rename;
        $move = move_uploaded_file($image_temp,$location);	

}


 ?>