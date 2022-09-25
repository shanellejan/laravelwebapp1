<?php
			include("mysqlconnect.php");

		  
		  $sql="SELECT * FROM measurement";
		  $sqlq=mysql_query($sql,$conn);


		function GetImageExtension($imagetype)
		 {
			   if(empty($imagetype)) return false;
			   switch($imagetype)
			   {
				   case 'image/bmp': return '.bmp';
				   case 'image/gif': return '.gif';
				   case 'image/jpeg': return '.jpg';
				   case 'image/png': return '.png';
				   default: return false;
			   }
		 }
	 
	 
	 
		if (!empty($_FILES["image"]["name"])) 
		{
			$file_name=$_FILES["image"]["name"];
			$temp_name=$_FILES["image"]["tmp_name"];
			$imgtype=$_FILES["image"]["type"];
			$ext= GetImageExtension($imgtype);
			$imagename=$_FILES["image"]["name"];
			$path = "image/".$imagename;
			$date=date("Y-m-d");

		if(move_uploaded_file($temp_name, $path)) 
		{
		
		  $User_ID = $_SESSION["ID"];
		  $customization_no=$_POST['customization_no'];
		  $type=$_POST['type'];
		  $bust=$_POST['bust'];
		  $waistline=$_POST['waistline'];
		  $hips=$_POST['hips'];
		  $figure=$_POST['figure'];
		  $shoulder=$_POST['shoulder'];
		  $armlength=$_POST['armlength'];
		  $skirtlength=$_POST['skirtlength'];
		  $description=$_POST['description'];
		  $gender=$_POST['gender'];
		  $color=$_POST['color'];
		  $image_path=$_POST['image_path'];
		  
		  $query_upload="INSERT into measurement(user_id,date,customization_no,type,bust,waistline,hips,figure,shoulder,armlength,skirtlength,description,gender,color,image_path)
			VALUES ('$User_ID','$date','$customization_no','$type','$bust','$waistline','$hips','$figure','$shoulder','$armlength','$skirtlength','$description','$gender','$color','$path')";
			mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
			
		}
		else
		{
			exit("Error While uploading image on the server");
		} 

}

header('location:emailcon.php');
?>
