<!DOCTYPE html>
<html lang= "fr">
<?php 
    require_once("head.php");
?>
<body>
    <div class="h-bg">
    <div class="wrap">
	<div class="header">
		<div class="logo">
		  	 <a href="index.html"><img src="img/images/logo.png"> </a>
		 </div>
	<div class="header-right">
	 	 <ul class="nav">
	        <li class="active"><a href="typepage.php" title="Home">Inscription</a></li>
      </ul>
	 </div>
	 <div class="clear"></div>
	</div>
</div>
</div>
<div class="cont_bg">

    <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">
				<form  method="post" action="traitements_php/authentification.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control"  name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="typepage.php">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
    
<?php
  
?>
</body>
</html>