<?php
session_start();
?>
<html>
  <head>    
 <title>  </title>
   </head>
      <body>
	  <h3>create new  account</h3>
	  
	  <form action="" method="post">
   <input type="text"  placeholder="enter name" name="name"><br>
   <input type="text"  placeholder="enter email" name="email"><br>
   <input type="text"  placeholder="enter phone" name="phone"><br>
   <input type="text"  placeholder="enter password" name="psd"><br>
   <input type="submit" name="submit">
      </form>
	  <?php
$server="localhost";
$username="root";
$password="";
$database="admin";
$con=mysqli_connect($server,$username,$password,$database)or die ("unable to connect");
	  ?>
	  <?php
	  if(isset($_POST['submit']))
	  {
	   $nme=$_POST['name'];
	   $eml=$_POST['email'];
	   $phn=$_POST['phone'];
	   $pas=$_POST['psd'];
	   $sql = "SELECT * FROM logintest WHERE email='$eml'";
		$result = mysqli_query($con, $sql);
	  if(mysqli_num_rows($result)){
		  echo "User already exists !";
		  
	  }else{
		 $query = "INSERT INTO logintest (name, email, password) VALUES('$nme', '$eml', '$pas')";
		 mysqli_query($con, $query);
		 $_SESSION['success'] = "You are now logged in";
		 header('location:regist.php');
	  }
		
	  
	  }
	  ?>
	  <span style='color:green'>
		<?php
		if($_SESSION["success"]){
			echo $_SESSION["success"];
		}
		?>
	  </span>
	  
	  <a href="logn.php">Click to login</a>
	  </body>

</html>