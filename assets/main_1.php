<section class="w3l-form-36">
		<div class="form-36-mian section-gap">
			<div class="wrapper">
				<div class="form-inner-cont">
					<h3>Login now</h3>
					<br>
					<?php if($this->session->flashdata('login_failed'))
					{
						?>
					<div class="alert alert-danger" role="alert">
						<?php
						echo $this->session->flashdata('login_failed');
						?>
					</div>
					<?php 

						}


					 ?>
					
        
					<form  method="post" action="<?php echo site_url('admin/login/verify')?>"class="signin-form">
						<div class="form-input">
							<span class="fa fa-envelope-o" aria-hidden="true"></span> 
							<input type="text" name="username"
								placeholder="username" required />
								
						</div>
						<div class="form-input">
							<span class="fa fa-key" aria-hidden="true"></span> <input type="password" name="password" placeholder="Password"
								required />
						</div>
						<div class="login-remember d-grid">
							<label class="check-remaind">
								
								
								
							</label>
							<button class="btn btn-primary" name="submit" type="submit" value="submit" >Login</button>
						</div>
						 
					</form>
					

				<!-- copyright -->
				<div class="copy-right">
					<p>© 2020 Active Login Form. All rights reserved | Design by <a href="http://w3layouts.com/"
							target="_blank">W3Layouts</a></p>
				</div>
				<!-- //copyright -->
			</div>
		</div>
	</section>