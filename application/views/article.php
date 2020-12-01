 <?php $this->load->view('assets/header'); ?>

		<b><h1  style="color: black;"> <?php echo $news->title;?></h1></b><br>
		<img src="<?php echo site_url('uploads/'.$news->image);?>"style="padding-left:100px;" class="container" >  <br> 
		<p  style="color: black; font-family:arial;" ><?php echo $news->description;?>

		<p style="  font-size: 15px;  font-family:perpetual; color: black; " > Author:<?php echo $news->author;?> 
		</p></p>
				<small style="color: black; float: right; ">Posted on :<?php echo $news->created_at;?></small></i>
	
	<div class="clear" ></div>
	 		
<hr>
 
 <h3 style="color: black;margin-bottom: 10px;"  > comment</h3>
 
 <?php  
  	foreach($comments as $x): ?>
  		<h5 style="color: black;margin-bottom: 10px;" ><?php  echo $x->body ;?> [by <strong><?php echo $x->name;?></strong> ] <?php echo $x->time; ?></h5> 
  		  
  	<?php endforeach; ?>
 	 
  <hr>
 
<h3 style="color: black;">Add Comment</h3>
<?php echo validation_errors();?>
<?php echo form_open('comment/create/'.$news->id);?>
	 
	<div class="form-group">
		<label>Name</label>
		<input style="color: black;" type="name" name="name" class="form-control">
	</div>
	<div class="form-group" style="color: black;">
		<label>Email</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group" style="color: black;">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="news_id" value="<?php echo $news->id; ?>" readonly="value">
	<button class="btn btn-primary" type="submit">Submit</button>
</form>

  
<?php $this->load->view('assets/footer'); ?>
	
 