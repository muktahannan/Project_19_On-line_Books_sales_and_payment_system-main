<?php include("connect/header.php");?>
		<?php include("connect/sidebar.php");?>
		
	
		<div id="content">
		<form action="view_category_submit.php" method="post" enctype="multipart/form-data">
		<table border="1">
		
		<?php 
		
					$sql=mysql_query("select * from product");
					if(mysql_num_rows($sql)==0){
					echo "no Book here";
					}
					else{
					
					while($row=mysql_fetch_array($sql)){
					?>
			<div class="box">
			<a href="details.php?id=<?php echo $row["Book_id"]; ?>"><img src="photo/<?php echo $row["Book_image"]; ?>" alt="" border="0" height="70%" width="100%" /></a><br>
          <span class="book_name"><b> Book Name:</b> &nbsp;<?php echo $row["Book_Name"]; ?></span><br> <br>
		  <span class="price">  <b>Book Price:</b> <?php echo $row["Book_Price"]; ?></span>
		  <a href="cart.php?id=<?php echo $row["Book_id"]; ?>" class="cart">Add to Cart</a></div>
				<?php }
				}
					?>
				</table>
					</form>
				</div>
				
		
		
	<?php include("connect/footer.php");?>
