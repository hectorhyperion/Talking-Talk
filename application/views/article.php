 <?php $this->load->view('assets/header'); ?>

		<b><h1  style=""> <?php echo $news->title;?></h1></b><br>
		<img src="<?php echo site_url('uploads/'.$news->image);?>" style="width: 50%;" >  <br> 
		<p  style="font-family:arial;" ><?php echo $news->description;?>

		<p style="font-size: 15px;  font-family:perpetual;  " > Author:<?php echo $news->author;?> 
		</p></p>
				<small style=" float: right; ">Posted on :<?php echo $news->created_at;?></small></i>
	
	<div class="clear" ></div>
	 		
<hr>
 
 <h3 style="margin-bottom: 10px;"  > comment</h3>
 
 <?php  
  	foreach($comments as $x): ?>
  		<h5 style="margin-bottom: 10px;" ><?php  echo $x->body ;?> [by <strong><?php echo $x->name;?></strong> ] <?php echo $x->time; ?></h5> 
  		  
  	<?php endforeach; ?>
 	 
  <hr>
 
<h3>Add Comment</h3>
<?php echo validation_errors();?>
<?php echo form_open('comment/create/'.$news->id);?>
<br>
	 
	<div class="form-group">
		<label>Name</label>
		<input style="" type="text" name="name" class="form-control">
	</div>
	<div class="form-group" style="">
		<label>Email</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group" style="">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="news_id" value="<?php echo $news->id; ?>" readonly="value">
	<button class="btn btn-primary" type="submit">Submit</button>
</form>

  
<?php $this->load->view('assets/footer'); ?>
	
 