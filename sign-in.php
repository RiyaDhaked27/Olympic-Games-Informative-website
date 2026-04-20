<?php
include('include/header.php');
// if ($_SESSION['loginSession'] == && empty($_SESSION['loginSession'])) {
	

?>

<div class="container">
	<form method="post" action="index.php">
	<div class="row">
		<div class="col-md-6 offset-3">
			<h3 class="signin-title">Sign in Here</h3>
			<div class="form-group mb-3">
				<label>Email <span class="required">*</span></label>
					<input type="text" name="email" class="form-control" placeholder="enter email id">
			</div>

            <div class="form-group mb-3">
				<label>Password <span class="required">*</span></label>
					<input type="password" name="pass" class="form-control" placeholder="enter password">
			</div>
			<div class="form-group mb-3">
				<button class="btn btn-success btn-md w-100" name="signin ">Sign In</button>
			<?php 
					if($_SESSION['error']=''){
						echo $_SESSION['error'];		
					}
					$_SESSION['error'] ='';
				?>

		</div>
		<a href="sign-up.php" class="btn btn-info">Sign Up here</a>
		</div>
	</div>
</form>
</div>

<?php
// }else{
// 	header("location:".$siteUrl."/profile.php");
// }
include('include/footer.php');
?>