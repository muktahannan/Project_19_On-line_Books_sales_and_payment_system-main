<?php
include("connect/header.php");
include("connect/sidebar.php");
?>
				<article>
					<h2>All Category</h2>
					<form action="view_category_submit.php" method="post" enctype="multipart/form-data">
					<table border="1">
					<tr><th>Category Name</th><th>Category Description</th><th>Publication Status</th><th>Action</th></tr>
					
					<?php 
					if(isset($_GET["id"])){
					$ss=mysql_query("delete from add_categorybooks where id='".$_GET["id"]."'");
					echo "Deleted";
					}
					
					$sql=mysql_query("select * from add_categorybooks");
					if(mysql_num_rows($sql)==0){
					echo "no category here";}
					else{
					
					while($row=mysql_fetch_array($sql)){
					echo "<tr><td>".$row["Category_Name"]."</td><td>".$row["Category_Description"]."</td><td>".$row["Publication_Status"]."</td><td><a href='view_category.php?id=".$row["category_id"]."'>Delete</a></td></tr>";}
					}
					
					?>
				
					</td></tr>
					
					
					
					</table>
					</form>
				
				</article>
			<?php include("connect/footer.php");?>