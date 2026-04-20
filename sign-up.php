<?php
include('include/header.php');
?>

<div class="container">
	<form method="post" action="controller/controller.php" enctype="multipart-form-data">
	<div class="row bg-light p-5">
		<div class="col-md-6 offset-3">
			<h3 class="signin-title">Signup Here</h3>

			<div class="form-group mb-3">
				<label>Full Name <span class="required">*</span></label>
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>
			<div class="form-group mb-3">
				<label>Contact Number<span class="required">*</span></label>
				<input type="text" name="contact" class="form-control" placeholder="Contact Number">
			</div>
			<div class="form-group mb-3">
				<label>Email<span class="required">*</span></label>
				<input type="text" name="email" class="form-control" placeholder="enter email id">
			</div>
			<div class="form-group mb-3">
				<label>Password <span class="required">*</span></label>
				<input type="password" name="pass" class="form-control" placeholder="enter password">
			</div>
			<div class="form-group mb-3">
				<label>Confirm Password <span class="required">*</span></label>
				<input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
			</div>
			<div class="form-group mb-3">
              <button class="btn btn-success btn-md" type="submit" name="signup">Signup</button>
              <?php
              if($_SESSION['error']=''){
              	echo $_SESSION['error'];
              }$_SESSION['error'] = '';
              ?>
		</div>
		<a href="sign-in.php" class="btn btn-info">Sign In here</a>

		
	</div>
	
</div>
</form>
</div>

<?php
include('include/footer.php');
?>