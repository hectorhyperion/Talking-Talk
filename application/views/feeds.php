
 <?php $this->load->view('assets/header'); ?>
 <h1>News </h1>
 	<?php 
			//using foreach loop to display news....
		foreach($news as $n)
		{

		?>
		<a style="margin-bottom:20px; display: block; text-decoration: none;" href="<?php echo site_url('index/detail/'.$n->id);?>">
		<div class="row">
			<div class="col-md-3">
				<img style="width: 250px;" src="<?php echo site_url('uploads/'.$n->image);?>">
			</div>

			<div class="col-md-6">
				<h1><?php echo word_limiter($n->title,25) ;?></h1>

				<p><?php echo word_limiter($n->description,20);?>

				<i>(Author:<?php echo $n->author;?>)</i></p>
 
				<button class="btn btn-info" style="margin-top: 5px;">read more</button>

				<p class="post-date">Posted on :<?php echo $n->created_at;?></p>
			</div>
			</div>
		</a>
		<?php 

		} ?>
	 
 	 
 		<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
    	 
		 <?php echo $this->pagination->create_links();?>
		 
		</li>
	</ul>
</nav>
 
			 

 <?php $this->load->view('assets/footer'); ?>
</div>
</div></div>