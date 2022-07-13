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
								placeholder="username" />				
						</div>
						<?php echo form_error('username');?>
						<div class="form-input">
							<span class="fa fa-key" aria-hidden="true"></span> <input type="password" name="password" placeholder="Password"/>
								
						</div>
						<?php echo form_error('password');?>
						<div class="login-remember d-grid">
							<label class="check-remaind">
								
								
								
							</label>
							<button class="btn btn-primary" name="submit" type="submit" value="submit" >Login</button>
						</div>
						<a href="<?php echo site_url('admin/login/forgot_view')?>">Forgot password?</a>
						 
					</form>
					

				<!-- copyright -->
				 
				<!-- //copyright -->
			</div>
		</div>
	</section>
	
</body>

</html>
