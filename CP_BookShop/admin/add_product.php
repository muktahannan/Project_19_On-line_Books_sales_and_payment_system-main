<?php
include("connect/header.php");
include("connect/sidebar.php");
?>
				<article>
					<h2>Add Product</h2>
					<form action="add_product_submit.php" method="post" enctype="multipart/form-data">
					<table>
					<tr><td>Book image</td><td><input type="file" name="Book_image"></td></tr>
					<tr><td>Book Name</td><td><input type="text" name="Book_Name"></td></tr>
					
					<tr><td>Book Description</td><td><textarea name="Book_Description"></textarea></td></tr>
					
					
					
					<tr><td>Book Price</td><td><input type="text" name="Book_Price"></td></tr>
					
					<tr><td>ISBN Number</td><td><input type="text" name="ISBN_Number"></td></tr>
					
					<tr><td>Author Name</td><td><input type="text" name="Author_Name"></td></tr>
					
					<tr><td>Category Name</td><td><select name="Category_Name">
							<?php
							$select=mysql_query("select * from add_categorybooks");
							while($row=mysql_fetch_array($select))
							{
								echo "<option value='".$row["Category_Name"]."'>".$row["Category_Name"]."</option>";
							}
							
							?>
					
					</select></td></tr>
					
					<tr><td></td><td><input type="submit"  name="btn" value="submit"></td></tr>
					</table>
					</form>
				
				</article>
<?php include("connect/footer.php");?>	