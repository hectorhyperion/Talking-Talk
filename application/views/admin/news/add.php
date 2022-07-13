
 <div class="container">
 <a href="<?php echo site_url('admin/news');?>"><input type="button" name="back" value="back" class="btn btn-primary" style="float: right; font-family: algerian;"></a>
		  <h1>Add New News</h1>     <br>
		 <form action="<?php echo  site_url('admin/news/add');?>" method="post" enctype="multipart/form-data" >
		 	<div class="col-md-7" >
			 <div class="form-group">
		 		 
		 			</div>
					 
		 			<div class="clearfix"></div>
			 </div> 
			 <br>
		 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">Title</label>
		 			<div class="col-md-9">
		 				<input type="text" name="title" class="form-control" >
		 			</div>			
			<div style="margin-left:50% ;" >

			
					<?php echo form_error('title') ;?>
		 			<div class="clearfix"></div>
			 </div> 		
	 	</div>
	 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">Author</label>
		 			<div class="col-md-9">
		 				<input type="text"name="author"class="form-control" >
		 			</div>
					 <div style="margin-left:50% ;" >

					 <?php echo form_error('author') ;?></div>
		 			<div class="clearfix"></div>
			 </div> 		
	 	</div>
	 	<div class="form-group">
		 		<div class="row">
		 			<label class="col-md-3">Description</label>
		 			<div class="col-md-9">
		 				<textarea id="editor1" name="description" class="form-control"  ></textarea>
		 			</div>
					 <div style="margin-left:50% ;" >

					 <?php echo form_error('description') ;?></div>
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
 </div>
  <script>
    CKEDITOR.replace('editor1', {
      extraPlugins: 'placeholder',
      height: 220
    });
  </script>
 
