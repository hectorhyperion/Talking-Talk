 <?php include 'assets/header.php'; ?>
		  <!-- main content start -->
<?php include 'assets/sidebar.php'; ?>

 <?php include 'assets/main.php'?>
 <a href="<?php echo site_url('admin/news');?>"><input type="button" name="back" value="back" class="btn btn-primary" style="float: right; font-family: algerian;"></a>
		  <h1>Add New News</h1>     <br>
		 <form action="<?php echo  site_url('admin/news/save');?>" method="post" enctype="multipart/form-data" >
		 	<div class="col-md-7" >
			 <div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">slug</label>
		 			<div class="col-md-9">
		 				<input type="text" name="slug" class="form-control" required="required">
		 			</div>
					 
		 			<div class="clearfix"></div>
			 </div> 
			 <br>
		 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">Title</label>
		 			<div class="col-md-9">
		 				<input type="text" name="title" class="form-control" required="required">
		 			</div>
		 			<div class="clearfix"></div>
			 </div> 		
	 	</div>
	 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">Author</label>
		 			<div class="col-md-9">
		 				<input type="text"name="author"class="form-control" required="required">
		 			</div>
		 			<div class="clearfix"></div>
			 </div> 		
	 	</div>
	 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">Description</label>
		 			<div class="col-md-9">
		 				<textarea id="editor1" name="description" class="form-control" required="required
		 				" ></textarea>
		 			</div>
		 			<div class="clearfix"></div>
</div>		 		
			 </div>
			 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">Image</label>
		 			<div class="col-md-9">
		 				<input type="file"name="image"class="form-control">
		 			</div>

		 			<div class="clearfix"></div></div>
			 </div> 		
			 <br>
			 <input type="submit" name="submit" class="btn btn-info" value="Save News"> 		
	 	</div>
	</div>
	<div class="clearfix"></div>

 </form> 
  <script>
    CKEDITOR.replace('editor1', {
      extraPlugins: 'placeholder',
      height: 220
    });
  </script>
 <?php include 'assets/footer.php'; ?>
