<?php
include("connect/header.php");
include("connect/sidebar.php");
?>
				<article>
					<h2>View Book</h2>
					<form action="view_book_submit.php" method="post" enctype="multipart/form-data">
					<table border="1">
					<tr><th>Book Image</th><th>Book Name</th><th>Book Description</th><th> Book Price</th><th>ISBN Number</th><th>Author Name</th><th>Category Name</th><th>Action</th></tr>
					
					<?php 
					if(isset($_GET["id"])){
					$ss=mysql_query("delete from product where Book_id='".$_GET["id"]."'");
					echo "Deleted";
					}
					
					$sql=mysql_query("select * from product");
					if(mysql_num_rows($sql)==0){
					echo "no category here";}
					else{
					
					while($row=mysql_fetch_array($sql)){
					echo "<tr><td><img src='../photo/".$row["Book_image"]."' width='60px' height='60px'></td><td>".$row["Book_Name"]."</td><td>".$row["Book_Description"]."</td><td>".$row["Book_Price"]."</td><td>".$row["ISBN_Number"]."</td><td>".$row["Author_Name"]."</td><td>".$row["Category_Name"]."</td><td><a href='view_book.php?id=".$row["Book_id"]."'>Delete</a></td></tr>";}
					}
					
					?>
				
					</td></tr>
					
					</table>
					</form>
				
				</article>
			<?php include("connect/footer.php");?>