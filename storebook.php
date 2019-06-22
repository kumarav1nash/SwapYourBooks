<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

	$a1 = $_REQUEST["Booktitle"];
	$a2 = $_REQUEST["Bookwriter"];
	$a3 = $_REQUEST["Originalprice"];
	$a4 = $_REQUEST["Ourprice"];
	$a5 = $_REQUEST["BookCat"];
	
	$Con = mysql_connect("localhost","root","");
	if(!$Con)
	{
		die("server not connect".mysql_error());
	}
	mysql_select_db("swapyourbooks",$Con);
	mysql_query("insert into bookdetails values('$a1','$a2','$a3','$a4','$a5')");
	mysql_close();
			?>
			<form>
	
<?php
	
if ((($_FILES["bookimg"]["type"]== "image/gif") 
|| ($_FILES["bookimg"]["type"]== "image/jpg") 
|| ($_FILES["bookimg"]["type"]== "image/png") 
|| ($_FILES["bookimg"]["type"]== "image/jpeg")) 
&& (($_FILES["bookimg"]["size"]/1024)<7000))

{
if($_FILES["bookimg"]["error"]>0){
echo "Return COde: ". $_FILES["bookimg"]["error"]. "<br />";
}
else{
if(file_exists("img/" . $_FILES["bookimg"]["name"])){
echo $_FILES["bookimg"]["name"]. "already exist. ";
}
else{
move_uploaded_file($_FILES["bookimg"]["tmp_name"],"img/" .$_FILES["bookimg"]["name"]);
}
}
}

else{
echo "Invalid file";
}

?>
	
</form>

</body>
</html>