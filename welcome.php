<html>
<?php session_start(); ?>
<?php
if($_SESSION['userid']){
	
}else{
	header("location:logn.php");
}
?>
welcome <?php echo $_SESSION['userid'] ?>

<a href="logout.php">logout</a>

</html>