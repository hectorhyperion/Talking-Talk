<?php include 'assets/sidebar.php'; ?>
 <?php include 'assets/header.php'; ?>
		  <!-- main content start -->

 <?php include 'assets/main.php'?>

		  <h1>Edit News</h1>
		 <form action="<?php echo  site_url('admin/sport_news/update/'.$sport_news->id);?>" method="post" >
		 	<div class="col-md-7" >
		 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">title</label>
		 			<div class="col-md-9">
		 				<input type="text" name="title" class="form-control" value="<?php echo $sport_news->title; ?>" >
		 			</div>
		 			<div class="clearfix"></div>
			 </div> 		
	 	</div>
	 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">author</label>
		 			<div class="col-md-9">
		 				<input type="text"name="author"class="form-control" value="<?php echo $sport_news->author;?>" >
		 			</div>
		 			<div class="clearfix"></div>
			 </div> 		
	 	</div>
	 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">description</label>
		 			<div class="col-md-9">
		 				<textarea name="description" class="form-control" ><?php echo $sport_news->description; ?></textarea>
		 			</div>
		 			<div class="clearfix"></div>
			 </div>
			 <input type="submit" name="submit" class="btn btn-info" value="Save News"> 		
	 	</div>
	</div>
	<div class="clearfix"></div>
 </form> 
 <?php include 'assets/footer.php'; ?>
