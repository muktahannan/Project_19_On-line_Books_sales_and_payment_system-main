<?php include("connect/header.php");?>
		<?php include("connect/sidebar.php");?>
		<div id="content">
		<?php include("database/connection.php");
		$ip=$_SERVER["REMOTE_ADDR"];
if (isset($_POST['btn'])){
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$country=$_POST["country"];
$password=$_POST["password"];

$sql=mysql_query("insert into tbl_registration(name,email,phone,address,country,password) values('$name','$email','$phone','$address','$country','$password')");
if($sql)
{echo "Thanks for shopping"; 
$select=mysql_query("select max(reg_id) as reg from tbl_registration");
$row=mysql_fetch_array($select);
$reg=$row["reg"];
	mysql_query("update cart set reg_id='$reg' where Ip_add='$ip' and date='".date("Y-m-d")."'");

}
else{echo "Case not Inserted";}
	}			
				?>	
			</div>
<?php include("connect/footer.php");?>