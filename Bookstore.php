<?php
include('PageHeader.php');
?>
<style>
<?php include 'Bookstore.css'; ?>
</style>


<div class="containpic1">
	
	<div class="containerFlex">
			<?php
			
		
	$con = mysql_connect("localhost","root","");
	if(!$con)
	{
		die("server not found =".$mysql_error());
	}
	mysql_select_db("swapyourbooks",$con);
	$result=mysql_query("select * from bookdetails");
	while($row=mysql_fetch_array($result))
	{
		?>
			
					<div>
						<div class="Bookimg"> <img src='img/book3.jpg' height="200px" width="300px"></div>
						<div class="Booktitle"><?php echo $row["BookTitle"]?></div>
						<div class="Bookwriter"><?php echo "Written By : ".$row["BookWriter"]?></div>
						<div class="price">
						
							<div style="float: left; width: 50%; border-right: 2px solid #ffc000;">Original Price</div>
							<div>Our Price</div>
						</div>
						<div class="price">
						
							<div style="float: left; width: 50%; border-right: 2px solid #ffc000;"><del><?php echo $row["OriginalPrice"]." INR"?></del></div>
							<div><?php echo $row["OurPrice"]." INR"?></div>
						</div>
						<div class="kartid"> Add To Cart</div>
					</div>
					
					
					
				
			<?php
	}
		?>
		</div>		


	
</div>
		
				
</div>

</body>
</html>