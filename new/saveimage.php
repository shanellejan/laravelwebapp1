<?php
  include("mysqlconnect.php");

  @$id=$_POST['id'];
  @$product_code=$_POST['product_code'];
  @$product_name=$_POST['product_name'];
  @$color=$_POST['color'];
  @$size=$_POST['size'];
  @$type=$_POST['type'];
  @$imgage_path=$_POST['imgage_path'];
  @$price=$_POST['price'];
  @$available=$_POST['available'];
  @$product_desc=$_POST['product_desc'];
  @$color_desc=$_POST['color_desc'];
  
  
  $sql="SELECT * FROM products";
  $sqlq=mysql_query($sql,$conn);
  echo "<br/>";
  echo "<select name='lstid'>";
  
  while($row=mysql_fetch_array($sqlq,MYSQL_ASSOC))
  {
  echo  "<option>".$row['id']."</option>";
  }
  echo"</select>";
  @$id=$_POST['lstid'];
	   

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
	 
	 
	 
if (!empty($_FILES["image"]["name"])) {

	$file_name=$_FILES["image"]["name"];
	$temp_name=$_FILES["image"]["tmp_name"];
	$imgtype=$_FILES["image"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=$_FILES["image"]["name"];
	$path = "image/".$imagename;
	$date=date("Y-m-d");

if(move_uploaded_file($temp_name, $path)) {

 	$query_upload="INSERT into products (image_path,date,product_code,product_name,color,size,type,price,color_desc,product_desc,available) 
	VALUES ('$path','$date','$product_code','$product_name','$color','$size','$type','$price','$color_desc','$product_desc','$available')";
	mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error());  
	
}else{

   exit("Error While uploading image on the server");
} 

}
header('location:product.php');
?>
