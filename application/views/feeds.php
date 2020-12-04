
 <?php $this->load->view('assets/header'); ?>
 
 	<?php 
			//using foreach loop to display news....
		foreach($news as $n)
		{

		?>
		<a style="margin-bottom:20px; display: block; text-decoration: none;" href="<?php echo site_url('index/detail/'.$n->id);?>">
		<div class="row">
			<div class="col-md-3">
				<img style="width: 100px;" src="<?php echo site_url('uploads/'.$n->image);?>">
			</div>

			<div class="col-md-6">
				<h1 style="color: black;"><?php echo word_limiter($n->title,25) ;?></h1>

				<p  style="color: black;"><?php echo word_limiter($n->description,20);?>

				<i>(Author:<?php echo $n->author;?>)</i></p>
 
				<button class="btn btn-default" style="margin-top: 5px;">read more</button>

				<p class="post-date">Posted on :<?php echo $n->created_at;?></p>
			</div>
			</div>
		</a>
		<?php 

		} ?>
	 
 	<div class="pagination">
		 <?php echo $this->pagination->create_links();?>
 </div>
			 

 <?php $this->load->view('assets/footer'); ?>
</div>
</div></div>