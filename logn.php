
 <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  
  
  
  <link rel="stylesheet" href="login.css">  
  
  
  </head> 
 <?php session_start();?>
 
     <?php
$server="localhost";
$username="root";
$password="";
$database="admin";
$con= mysqli_connect($server,$username,$password,$database)or die ("unable to connect");
	  ?>
	  <body>
<div class="container-fluid h-100"style="margin-top:50px;">
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-6 col-lg-3 col-sm-push-4">
		 <h3 align="center"> Sign Up page </h3>
		 
		 
                
             
	
			<form id="basic-form" action="" method="post">
   
    <p>
      <label for="email">E-Mail <span>(Required)</span></label>
      <input id="email" name="email">
    </p>
  <p>
    <label for="password">Password <span>(Required)</span></label>
    <input id="password" name="password">
    </p>
    <p>
      <input class="submit" type="submit" value="SUBMIT" name="login" >
    </p>
</form>

			
<?php
if(isset($_POST['login']))
{
$eml=$_POST['email'];
$pas=$_POST['password']	;



$sql = "SELECT * FROM logintest WHERE email='$eml' AND password='$pas'";
$result = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($result))
	  {
  
  $row = mysqli_fetch_assoc($result);
  $_SESSION['userid'] = $row['id'];
  header('location:welcome.php');
  
} else {
  echo "Wrong username password !";
}
}
?>
                </div>
          </div>
    </div>
</body>	














<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


<script>
    $(document).ready(function() {
  $("#basic-form").validate({
    rules: {
     
      email: {
        required: true,
        email: true
      },
      password: {
        required: true
      }
    },
    messages : {
      email: {
        email: "The email should be in the format: abc@domain.tld"
      },
      password: {
        required: "Required",
        number: "Min of 8 Character"
      }
    }
  });
});
   
</script>


