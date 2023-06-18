<?php
include("connect/header.php");
include("connect/sidebar.php");
?>
				<article>
				<?php 
$category_name=$_POST["category_name"];
$category_description=$_POST["category_description"];
$publication_status=$_POST["publication_status"];


$sql=mysql_query("insert into add_categorybooks(Category_Name,Category_Description,Publication_Status) values('$category_name','$category_description','$publication_status')");
if($sql)
{echo "Category Inserted"; }
else{echo "Category not Inserted";}
				
				?>	
				
				</article>
						
<?php include("connect/footer.php");?>	