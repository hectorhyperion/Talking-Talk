 <?php $this->load->view('assets/header'); ?>

		<b><h1  style="color: white;"> <?php echo $news->title;?></h1></b><br>
		<img src="<?php echo site_url('uploads/'.$news->image);?>"style="padding-left:100px;" class="container" >  <br> <br>
		<p  style="color: white; font-family:arial;" ><?php echo $news->description;?>

		<p style="  font-size: 25px; padding-bottom: 10px; padding-left:20px; font: italic; color: white; " > Author:  <i><?php echo $news->author;?> 
				<small style="color: white; float: right; ">Posted on :<?php echo $news->created_at;?></small></i>
	</p></p>
	 		

 <hr>
 <h3> comment</h3>
 
 <?php  
  	foreach($comments as $n): ?>
  		<h5><?php  echo $n['body'];?>[by <strong><?php echo $n['name'];?></strong> ]</h5>
  	<?php endforeach; ?>
 	 
 <hr>
 
<h3>Add Comment</h3>
<?php echo validation_errors();?>
<?php echo form_open('comment/create/'.$news->id);?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="news_id" value="<?php echo $news->id; ?>" readonly="value">
	<button class="btn btn-primary" type="submit">Submit</button>
</form>

  
<?php $this->load->view('assets/footer'); ?>
	
 