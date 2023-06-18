<?php include("connect/header.php");?>
		<?php include("connect/sidebar.php");?>
		<div id="content">
	<form action="registration_submit.php" method="POST">
		         <table style="margin:0 auto; border:2px solid red; background-color:#BCC6CC; width:420px; height:420px;">
					<tr><td>Name</td><td><input type="text" name="name"></td></tr>
					
					<tr><td>Email</td><td><input type="text" name="email"></td></tr>
					
					<tr><td>Phone</td><td><input type="text" name="phone"></td></tr>
					
					<tr><td>Address</td><td><textarea name="address"></textarea></td></tr>
					
					<tr><td>Country</td><td><input type="text" name="country"></td></tr>
					
					<tr><td>Password</td><td><input type="text" name="password"></td></tr>
					
					<tr><td></td><td><input type="submit"  name="btn" value="Confirm Order"></td></tr>
					</table>
	</form>
			
		</div>
<?php include("connect/footer.php");?>