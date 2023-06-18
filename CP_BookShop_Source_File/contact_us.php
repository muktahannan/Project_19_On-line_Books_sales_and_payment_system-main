<?php include("connect/header.php");?>
		<?php include("connect/sidebar.php");?>
		
	
		<div id="content">
		<form action="contact_us_submit.php" method="POST">
					 <table style="margin:0 auto; border:2px solid red; background-color:#D1D0CE; width:400px; height:400px;">
                            <tr>
								<td>E-Mail:</td>
							</tr>
							<tr>
								<td><input name="email" size="30" value="" type="text"></td>
							</tr>
							<tr>
								<td>Phone Number:</td>
							</tr>
							<tr>
								<td><input name="phone" id="company" size="30" value="" type="text"></td>
							</tr>
							<tr>
								<td><div >Subject: </div></td>
							</tr>
							<tr>
								<td><input name="subject" id="subject" size="30" value="" type="text"></td>
							</tr>
			
						<tr>
							<td>Message: </td>
                    	</tr>
                        <tr>
                        	<td><textarea name="message" style="width:100%;" rows="12" id="message"></textarea></td>
							
                        </tr>
                        <tr>
                        	<td><input name="submit" value="Submit Form" type="submit"></td>
						</tr>
			</table>
</form>
		</div>
				
		
		
	<?php include("connect/footer.php");?>
