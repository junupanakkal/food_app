<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else

{
	$username= 'table2';
	$mypassword = md5($username);
	$mypassword = '270e33da79c5156c1ba3b42cbc190c6c';
	header("location: routers/router.php");

}
?>