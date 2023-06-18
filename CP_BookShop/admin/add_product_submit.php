<?php
include("connect/header.php");
include("connect/sidebar.php");
?>
				<article>
				<?php 
$Book_image=time().$_FILES["Book_image"]["name"];
move_uploaded_file($_FILES["Book_image"]["tmp_name"],"../photo/".$Book_image);
$Book_Name=$_POST["Book_Name"];
$Book_Description=$_POST["Book_Description"];

$Book_Price=$_POST["Book_Price"];
$ISBN_Number=$_POST["ISBN_Number"];
$Author_Name=$_POST["Author_Name"];
$Category_Name=$_POST["Category_Name"];

$sql=mysql_query("insert into product(Book_Name,Book_Description,Book_image,Book_Price,ISBN_Number,Author_Name,Category_Name) values('$Book_Name','$Book_Description','$Book_image','$Book_Price','$ISBN_Number','$Author_Name','$Category_Name')");
if($sql)
{echo "Book Inserted"; }
else{echo "Book not Inserted";}
				
				?>	
				
				</article>
						
<?php include("connect/footer.php");?>		