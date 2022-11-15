<?php 
require_once 'header.php' 
?>

<div class="container cnt_login">
	<div class="row">
		<div class="col-md-6">
			<img src="images/logo.svg" height="90%" width="90%" alt="logo">
		</div>
		<div class="col-md-6">
			<p class="txt_login">Login</p>
			<div class="form-group input">
				<label for="usr">User name :</label>
				<input type="text" class="form-control" placeholder="User name">
			</div>
			<div class="form-group input">
				<label for="pwd">Password :</label>
				<input type="password" class="form-control" placeholder="Password">
			</div>	
			<div class="form-group input">
				<button type="button" class="btn btn-primary col-md-12" id="btn_login">Login</button>
			</div>	
		</div>
	</div>
</div>
    
	


<?php 
  require_once 'footer.php' 
?>

