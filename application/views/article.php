 <?php $this->load->view('assets/header'); ?>

		<b><h1  style="color: white;"> <?php echo $news->title;?></h1></b>
		<img src="<?php echo site_url('uploads/'.$news->image);?>"style="padding-left:100px;">
		<p  style="color: white;" ><?php echo $news->description;?>

				<p style="font-family:Algerian; font-size: 25px; padding-bottom: 10px; padding-left:20px; font: italic; color: white; " > Author:<i><?php echo $news->author;?></i></p></p>

		<div class="">
		<form  action="<?php echo  site_url('index/save');?>" method="post" class="form-control-lg">
		<h3 style="color: white;">COMMENT</h3>

	 <div class="form-group"style="color: white;" >
		<label>Name</label>
		<input type="text" name="name" class="form-control" required="required" style="background: white;" >
	</div>
	<div class="form-group"style="color: white;" >
		<label>Email</label>
		<input type="email" name="email" class="form-control" required="required" >
	</div>
	<div class="form-group"  style="color: white;">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="" >
	<button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>
 
<?php $this->load->view('assets/footer'); ?>
	
 