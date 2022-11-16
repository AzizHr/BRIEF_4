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
			<form action="php/connect.php" method="post">
				<div class="form-group input">
					<label for="usr">User name :</label>
					<input type="text" class="form-control" name="username" placeholder="User name" required>
				</div>
				<div class="form-group input">
					<label for="pwd">Password :</label>
					<input type="password" class="form-control" name="password"  placeholder="Password" required>
				</div>	
				<div class="form-group input">
					<button type="submit" class="btn btn-primary col-md-12" id="btn_login">Login</button>
				</div>	

				<?php
					if(isset($_GET['etat'])){
						echo '
						<div class="alert alert-danger mt-3" role="alert">
  							User name or password invalid !
						</div>';
					}
				 ?>
			</form>	
		</div>
	</div>
</div>
    
	
<?php 
  require_once 'footer.php' 
?>

