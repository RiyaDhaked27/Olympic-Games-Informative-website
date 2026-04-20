
// include('../config/config.php');
// // Booking Code

// if(isset($_REQUEST['booking'])) {

// 	$customer_name = $_REQUEST['customer_name'];
// 	$email_id = $_REQUEST['email_id'];
// 	$contact_number = $_REQUEST['contact_number'];

// 	if(empty($customer_name) && empty($email_id) && empty($contact_number)) {
// 		header("location:../book-now.php");
// 	}else {
// 		$sql  = "INSERT INTO booking(customer_name, email_id, contact_number) VALUES('$customer_name', '$email_id', '$contact_number')";

// 		if(mysqli_query($conn, $sql)) {
// 			echo "Data Submitted Succes;/s";
// 			//header("location:../book-now.php");
// 		}else {
<!-- // 			 echo "Error: " . $sql . "<br>" . mysqli_error($conn); -->
// 		}
// 	}	

// }

<?php
include('../config/config.php');

if (isset($_REQUEST['signup'])) {
	
	$name = $_REQUEST['name'];
	$contact = $_REQUEST['contact'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];
	$cpass = $_REQUEST['cpass'];

	if (empty($name) || empty($contact) || empty($email) || empty($pass)) {
		$_SESSION['error'] = "Please fill the blank field";
		header("location:".$siteUrl."/sign-up.php");
	}else{
		if ($pass == $cpass) {
			$password = md5($pass);

			$sql = mysqli_query($conn,"SELECT * FROM user_registeration WHERE email='$email'");
			if (mysqli_num_rows($sql)>0) {

				$_SESSION['error'] = "Your registration already exists!";
				header("location:".$siteUrl."/sign-in.php");
			}else{
				mysqli_query($conn,"INSERT INTO user_registeration(name,contact,email,pass) VALUES('$name','$contact','$email','$password')");
				$_SESSION['error'] = "Your registration successfully";
				header("location:".$siteUrl."/sign-in.php");
			}
		}else{
			$_SESSION['error'] = "Your confirm password did not match!";
			header("location:".$siteUrl."/sign-up.php");
		}
	}
}

// Sign in here

if (isset($_REQUEST['signin']) == 'signin') {
 	$email = $_REQUEST['email'];
 	$pass = $_REQUEST['pass'];

 	if (empty($email) && empty($pass)) {
 		$_REQUEST['error'] = "Please fill the blank field";
 		header("location:".$siteUrl."/sign-up.php");
	}else{
		$password = md5($pass);
		$sql = mysql_query($conn,"SELECT * FROM user_registration WHERE email='$email'");
			if (mysqli_num_rows($sql)>0) {
				$result = mysql_fetch_array($sql);

				$_SESSION['loginSession'] = $result['email'];
				header("location:".$siteUrl."/sign-in.php");
			}else{
			$_SESSION['error'] = "Your email & password are invalid!";
			header("location:".$siteUrl."/sign-in.php");
			}

 	}
 } 
// Signout

// if(isset($_REQUEST['signout']) =='signout') {
// 	session_destroy();
// 	session_unset();
// 	header("location:".$siteUrl."/index.php");
// }
 


?>
