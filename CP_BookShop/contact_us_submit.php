<?php include("connect/header.php");?>
		<?php include("connect/sidebar.php");?>

<?php
if (isset($_POST["submit"])){
$from=$_POST["email"];
$phone=$_POST["phone"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$to="test@tesst.com";

$headers = 'From: '.$from.'';

$email = mail($to, $subject, $message."<br/>".$phone."", $headers);
if ($email){
echo "Mail sent";
} else echo "Mail didn't sent";



}		
?>	
				


	<?php include("connect/footer.php");?>