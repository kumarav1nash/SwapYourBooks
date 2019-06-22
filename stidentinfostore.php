 <?php 

	$a1 = $_REQUEST["name"];
	$a2 = $_REQUEST["bookprice"];
	$a3 = $_REQUEST["email"];
	$a4 = $_REQUEST["number"];
	$a5 = $_REQUEST["stclass"];
	
			$Con = mysql_connect("localhost","root","");
	if(!$Con)
	{
		die("server not connect".mysql_error());
	}
	mysql_select_db("swapyourbooks",$Con);
	mysql_query("insert into studentinfo values('$a1','$a2','$a3','$a4','$a5')");
	mysql_close();
		$redirect="Location:Bookstore.php";
	echo header($redirect);
			?>
	