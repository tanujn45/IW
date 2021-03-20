<?php 
session_start();
$_SESSION["login"] = "false";
include "connection.php";
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$actual = "";
	
	$sql = "SELECT password FROM admin WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			$actual = $row['password'];
		}
		if($actual == $password) {
			$_SESSION['login'] = "true"; 
			header("Location: data");
		}
		else {
			echo "login unsuccessful";
		}
	}
	else {
		echo "user does not exist";
	}
}

?>
<?php include "components.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php head_tag(); ?>
    <title>Imperial Wellness | Admin Login</title>
</head>

<body>
    <section id="login">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-4 h-100 mt-5 w-100">
                <form action="login" method="POST">
                    <h2 class="text-center">Admin Login</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <center>
                            <input class="iw-btn" type="submit" value="Login" name="submit">
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php scripts(); ?>
</body>

</html>