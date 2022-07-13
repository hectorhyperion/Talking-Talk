 

		<b><h1  style=""> <?php echo $news->title;?></h1></b><br>
		<img src="<?php echo site_url('uploads/'.$news->image);?>" style="width: 50%;" >  <br> 
		<p  ><?php echo $news->description;?></p>

		<p  > Author:<?php echo $news->author;?> 
		</p> 
				<small style=" float: right; ">Posted on :<?php echo $news->created_at;?></small></i>
	
	<div class="clear" ></div>
	 		
<hr>


 <h3 style="margin-bottom: 10px;" class="font-weight-light"  > Comment</h3>
 
 
 <?php  
  	foreach($comments as $x): ?>
	<div class="card w-75" style="width: 18rem; background:grey; margin:1em;">
  <div class="card-body">
   
  		<h5 style="margin-bottom: 10px;" ><?php  echo $x->body ;?> [by <strong><?php echo $x->name;?></strong> ] <?php echo $x->time; ?></h5> 
		<a  href="<?php echo site_url('comment/delete/'.$x->id);?>"class="btn btn-danger">delete</a>
  	   </div>
</div>	  
  	<?php endforeach; ?>
 	
  <hr>
 
<h3>Add Comment</h3>
<?php echo validation_errors();?>
<?php echo form_open('comment/create/'.$news->id);?>
<br>
	 
	<div class="form-group">
		<label>Name</label>
		<input  type="text" name="name" class="form-control">
	</div>
	<?php echo form_error('name') ?>

	<div class="form-group" >
		<label>Email</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group" >
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="news_id" value="<?php echo $news->id; ?>" readonly="value">
	<button class="btn btn-primary" type="submit">Comment</button>
</form>

  
 
 