<?php include 'assets/sidebar.php'; ?>
 <?php include 'assets/header.php'; ?>
		  <!-- main content start -->

 <?php include 'assets/main.php'?>

		  <h1><b>Edit News</b></h1><hr>
		 <form action="<?php echo  site_url('admin/news/update/'.$news->id);?>" method="post" >
		 	<div class="col-md-7" >
		 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3"><b>Title</b></label>
		 			<div class="col-md-9">
		 				<input type="text" name="title" class="form-control" value="<?php echo $news->title; ?>" >
		 			</div>
		 			<div class="clearfix"></div>
			 </div> 		
	 	</div>
	 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3"><b>Author</b></label>
		 			<div class="col-md-9">
		 				<input type="text"name="author"class="form-control" value="<?php echo $news->author;?>" >
		 			</div>
		 			<div class="clearfix"></div>
			 </div> 		
	 	</div>
	 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3"><b>Description</b></label>
		 			<div class="col-md-9">
		 				<textarea name="description" class="form-control" ><?php echo $news->description; ?></textarea>
		 			</div></div>
		 			<div class="clearfix"></div>
			 </div>
			 <div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3"><b>Image</b></label>
		 			<div class="col-md-9">
		 				<input type="file"name="image"class="form-control">
		 				<?php if($news->image){?><br>
		 				<img src="<?php echo site_url('uploads/'.$news->image)?>"width="150">
		 			<?php } ?>
		 			</div>

		 			<div class="clearfix"></div></div>
			 </div> 
			 <input type="submit" name="submit" class="btn btn-info" value="Save News"> 		
	 	</div>
	</div>
	<div class="clearfix"></div>
 </form> 
 <?php include 'assets/footer.php'; ?>
