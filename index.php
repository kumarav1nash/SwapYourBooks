<?php
include('PageHeader.php');

?>
	<style>
		<?php include 'firstpagecss.css'; ?>
</style>
	
	
		<!--<div class="pict2">
			Welcome Member <br>Join Our Venture To Provide Books With Affordable Price..
</div>--><div class="bdim">
	
	<div class="cform">
				<form method="post" id="form_contact" action="stidentinfostore.php">
					
						<input type="text"       class="form_control"   placeholder="Your Name" name="name" required><br>
						
						<!--<div class="tooltip">
							
							<span class="tooltiptext">Enter 0 if you have no books to swap</span>
						</div><br>-->
						<!--<div class="form_control" id="getBook">
						<label>Do You Have Books To Return</label><br>
						<input type="radio" value="Yes" name="returnBookYes" checked>Yes
						<input type="radio" name="returnBookNo" value="No" >No<br>
						
  
						</div>-->
						<input type="number"       class="form_control" placeholder="Your Book's Total Price" name="bookprice" required><br>
						
						<input type="email"      class="form_control"   placeholder="Your email" name="email"><br>
							
						<input type="number"     class="form_control"   placeholder="Mobile number" name="number" required><br>
						
								<select name="stclass" class="form_control">

								<optgroup label="Select Your Class">
								<option value="VIII">VIII</option>
								<option value="IX">IX</option>
								<option value="X">X</option>
								<option value="XI">XI</option>
								<option value="XII">XII</option>
								</optgroup>
								</select><br>
						   <!-- 		<select>
<optgroup label="CITY 1">
        <option>City 1 branch A</option>
        <option>City 1 branch B</option>
        <option>City 1 branch C</option>
    </optgroup>

    <optgroup label="CITY 2">
        <option>City 2 branch A</option>
        <option>City 2 branch B</option>
    </optgroup>
</select><br>-->
						<input type="submit"     class="form_control submit" value="Submit" name="submit">
					
				</form>
			</div>
</div>
			
	</div>

</body>
</html>