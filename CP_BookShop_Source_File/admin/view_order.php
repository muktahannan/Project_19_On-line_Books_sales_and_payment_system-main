<?php
include("connect/header.php");
include("connect/sidebar.php");
$ip=$_SERVER["REMOTE_ADDR"];
?>
				<article>
					<table border="1">
<tr><td> Name </td><td> Price </td><td> Quantity </td><td> Total </td><td> Customer name </td><td> Customer Phone</td></tr>

<?php

$sql1=mysql_query("select * from cart join tbl_registration where cart.date='".date("Y-m-d")."' and cart.Ip_add='$ip' and cart.reg_id=tbl_registration.reg_id");
while($row1=mysql_fetch_array($sql1)){
if ($row1){




$total=0;
$sql=mysql_query("select * from product where Book_id='".$row1["Book_id"]."'");
while($row=mysql_fetch_array($sql)){
if ($row){

$qunatity = $row1["quantity"];
$total = $total+$qunatity * $row["Book_Price"];

?>

<tr><td> <?php echo $row["Book_Name"]; ?> </td><td> <?php echo $row["Book_Price"]; ?> </td>
<td>  <?php echo $row1["quantity"];?>
 </td>
<td><?php echo $total; ?></td><td><?php echo $row1["name"]; ?></td><td><?php echo $row1["phone"]; ?></td></tr>



							
							
							
<?php 

}
}}	

else {
echo "<font color='red'><h1>Database Connection Failed</h1></font>";
}
}


?>		

					
	</table>						
						
							
			
				</article>
			<?php include("connect/footer.php");?>