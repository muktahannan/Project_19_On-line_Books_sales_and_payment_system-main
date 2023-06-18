<?php include("connect/header.php");?>
		<?php include("connect/sidebar.php");?>
		
	
		<div id="content">
		<form action="view_category_submit.php" method="post" enctype="multipart/form-data">
		<table border="1">
		
		<?php 
		
					$sql=mysql_query("select * from product where Book_id='".$_GET["id"]."'");
					if(mysql_num_rows($sql)==0){
					echo "no Book here";
					}
					else{
					
					while($row=mysql_fetch_array($sql)){
					?>
			<div id="box">
			<a href="details.php?id=<?php echo $row["Book_id"]; ?>"><img src="photo/<?php echo $row["Book_image"]; ?>" alt="" border="0" height="50%" width="100%" /></a><br>
          <span class="book_name"><b> Book Name:</b> &nbsp;<?php echo $row["Book_Name"]; ?></span><br> <br>
		  <span class="book_name"><b> Book Description:</b> &nbsp;<?php echo $row["Book_Description"]; ?></span><br> <br>
		  <span class="book_name"><b> ISBN Number</b> &nbsp;<?php echo $row["ISBN_Number"]; ?></span><br> <br>
		    <span class="book_name"><b> Author Name</b> &nbsp;<?php echo $row["Author_Name"]; ?></span><br> <br>
			  <span class="book_name"><b> Category Name</b> &nbsp;<?php echo $row["Category_Name"]; ?></span><br> <br>
		  <span class="price">  <b>Book Price:</b> <?php echo $row["Book_Price"]; ?></span>
		  <a href="cart.php?id=<?php echo $row["Book_id"]; ?>" class="cart">Add to Cart</a></div>
				<?php }
				}
					?>
				</table>
					</form>
				</div>
				
		
		
	<?php include("connect/footer.php");?>
