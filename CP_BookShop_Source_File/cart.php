<?php
include("connect/header.php");
include("connect/sidebar.php");
include("database/connection.php");
$ip=$_SERVER["REMOTE_ADDR"];
if (isset($_GET["id"])){
$insert=mysql_query("select * from cart where Book_id='".$_GET["id"]."' and Ip_add='$ip' and date='".date("Y-m-d")."'");
if(mysql_num_rows($insert)==1){ echo "";}
else{
$sql=mysql_query("insert into cart (Book_id,Ip_add,quantity,date) values ('".$_GET["id"]."','$ip','1','".date("Y-m-d")."')");
}
}
?>
<table border="1">
<tr><td> Name </td><td> Price </td><td> Quantity </td><td> Total </td></tr>

<?php

if(isset($_POST["up"])){
	mysql_query("update cart set quantity='".$_POST["qnt"]."' where Book_id='".$_POST["product_id"]."' and Ip_add='$ip' and date='".date('Y-m-d')."'");
	header("location:cart.php");
}

if(isset($_POST["re"])){
	mysql_query("DELETE from cart where Ip_add='$ip' and date='".date('Y-m-d')."' and Book_id='".$_POST["product_id"]."'");
	header("location:cart.php");
}




$sql1=mysql_query("select * from cart where date='".date("Y-m-d")."' and Ip_add='$ip'");
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
<td> <form action="cart.php" method="post"><input type="hidden" value="<?php echo $row["Book_id"];?>" name="product_id"><input type="number" min="1" name="qnt" style="width:50px;" value="<?php echo $row1["quantity"];?>"><input type="submit" value="update" name="up"><input type="submit" value="remove" name="re"></form>
 </td>
<td><?php echo $total; ?></td></tr>



							
							
							
<?php 

}
}}	

else {
echo "<font color='red'><h1>Database Connection Failed</h1></font>";
}
}


?>		
<?php
$pro=0;
$itm=mysql_query("select quantity from cart where Ip_add='$ip'");
								while($rm=mysql_fetch_array($itm)) {
									$pro=$pro+$rm["quantity"];
									
								}
								echo "<b>Porduct ITEM : ".$pro."&nbsp;&nbsp;|&nbsp;&nbsp;</b>";
								
								$tprice=0;
								$price=mysql_query("select * from cart inner join product where product.Book_id=cart.Book_id");
								while($npri=mysql_fetch_array($price)) {
										$tprice=$tprice+$npri["quantity"]*$npri["Book_Price"];
									}
								echo "<b>Grand Total Price : ".$tprice."</b>";




?>
					
	</table>						
		<a class="continue" href="index.php">Continue to basket</a>	|| &nbsp; <a class="continue" href="registration.php">checkout</a>			
							
							
							
							
							
							
							
<?php include("connect/footer.php");?>