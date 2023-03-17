<?
include "connect.php";

if(isset($_POST['submit'])){

$email=$_POST["email"];
$firstname=$_POST["firstname"];
$surname=$_POST["surname"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];

if($password==$confirm_password){
	$encrypted_password=hash('md5',$password);
	$sql="insert into users(email,firstname,surname,password)values
	('$email','$firstname','$surname','$encrypted_password')";
	mysqli_query($conn,$sql) or die("olmadi");
	echo "oldu";
}else{
	echo "<pstyle='color:red'>Please confirm your pass</p>";
	
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
    <link rel="stylesheet" href="ebayRegister.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Register: Create a personal account</title>
</head>
<body>
    <div class="header">
        <a href="http://ebay/ebay.php"><img src="pngwing.com (12).png"></a>
        <span class="alreadyMember">
            Already a member? <a href="http://ebay/ebayLogin.php">Sign in</a>
        </span>
    </div>

    <h>Create an account</h>

<div class="mainContent">
    <div class="left-login">
    <form action="" method="POST">
        <span class="first-last">
        <input type="email" name="email" placeholder="Your Email" class="first" required>
        <input type="text" name="firstname" placeholder="Firstname" class="last"required> <br>
        </span>

        
<input type="text" name="surname" placeholder="Surname"required> <br>
<input type="password" name="password" placeholder="Password"required>
<input type="password" name="confirm_password" placeholder="Retry password"required>

<span class="span">
    By Creating an account, you agree to our <a href="#">User <br>
    Agreement</a> and acknowledge reading our <a href="#">User Privacy <br> 
    Notice</a> .
</span>
        

        <input type="submit" name="submit" value="Create account" class="subBtn">

        </form>
        </div>


        <div class="right-login">
            <span class="google">
                <i class="bi bi-google"></i>
                <a href="#">Continue with Google</a>
            </span>
            <span class="facebook">
                <i class="bi bi-facebook"></i>
                <a href="#">Continue with Facebook</a>
            </span>
            <span class="apple">
                <i class="bi bi-apple"></i>
                <a href="#">Continue with Apple</a>
            </span>
        </div>

<div class="separator">
    <span class="vline">
    </span>
    <span class="vline-bottom">
    </span>
    <span class="text">Or</span>
</div>


    </div>




</body>
</html>