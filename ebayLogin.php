<?
include("connect.php");
if(isset ($_POST['save'])){
$email=$_POST['email'];
$password=$_POST['password'];
$encrypted_password=hash('md5',$password);


$sql="select * from users where email='$email' AND password='$encrypted_password'";

$result=mysqli_query($conn,$sql)or die("Data");

if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_assoc($result);
	$_SESSION['user_id']=$row['id'];
	$_SESSION['email']=$row['email'];
	$_SESSION['firstname']=$row['firstname'];
	$_SESSION['surname']=$row['surname'];
	
	
	
	header("Location:ebay.php");
	
}else{
	
	echo"<p style='color:red;text-align:center'>Error, please try again later...</p>";
	
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="ebayLogin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Sign in or Register | eBay</title>
</head>
<body>
    
    <div class="header">
        <a href="http://ebay/ebay.php"><img src="pngwing.com (12).png"></a>
        <span class="alreadyMember">
        <a href="" style="text-decoration: none;">Tell us what you think</a>
        </span>
    </div>

    <h>Hello</h>
    <h2 class="sign">Sign in to eBay or <a href="http://ebay/ebayRegister.php">create an account</a></h2>

    <div class="login-form">
        <form action="ebayLogin.php" method="POST">
        <input type="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="Email address" required>
        <input type="password" name="password" placeholder="Password" required>

            <input type="submit" name="save" value="Continue" class="subBtn">
        </form>
    </div>


    <div class="or">

        <span class="facebook">
            <i class="bi bi-facebook"></i>
            <a href="#">Facebook</a>
        </span>

        <span class="google">
            <i class="bi bi-google"></i>
            <a href="#">Google</a>
        </span>

        <span class="apple">
            <i class="bi bi-apple"></i>
            <a href="#">Apple</a>
        </span>
    </div>

</body>
</html>