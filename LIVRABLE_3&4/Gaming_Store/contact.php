
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
			<div class="container">
				<div class="row">
					<div class="form-group col-md-6">
						<label >User name :</label>
						<input type="text" class="form-control" placeholder="User name">
					</div>
					<div class="form-group col-md-6">
						<label >Last name :</label>
						<input type="password" class="form-control" placeholder="Last name">
					</div>	
					<div class="form-group col-md-12">
						<label>Email :</label>
						<input type="email" class="form-control" placeholder="exemeple@gmail.com">
					</div>	
					<div class="form-group col-md-12">
						<label>Message :</label>
						<input type="password" class="form-control" placeholder="Your message">
					</div>	
				</div>
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
