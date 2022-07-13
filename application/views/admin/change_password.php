<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span><?= $title?></span>
           
          </div>
 
        </div>
		<?php echo form_open('admin/dashboard/change_password', array('id'=>'passwordform'))?>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder=" Old Password" type="password" name="oldpass" value="">
							
            </div>
						<?php echo form_error('oldpass')?>
            <div class="app-form-group">
			<input class="app-form-control" placeholder="newpass" type="password" name="newpass" value="">
			
            </div>
						<?php echo form_error('newpass', '<div class="alert alert-danger">', '</div>')?>
            <div class="app-form-group">
			<input class="app-form-control" placeholder=" Confrim Password" type="password" name="new_password2" value="">
	
            </div>
             		<?php echo form_error('new_password2', '<div class="alert alert-danger">', '</div>')?>

            <div class="app-form-group buttons">
             
              <button class="app-form-button" type="submit" value="submit" >CHANGE PASSWORD</button>
            </div>
			<?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
     
