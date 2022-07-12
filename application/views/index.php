<?php $this->load->view('assets/header'); ?>
    
	<h1 style="font-family:tahoma; ">Recent news</h1>
	<br>
   	<?php 
			//using foreach loop to display news....
		foreach($news as $n)
		{

		?>
		<a style="margin-bottom:20px; align-content:center;  display: block; text-decoration: none;" href="<?php echo site_url('index/detail/'.$n->id);?>">
		<div class="row">
			<div class="col-md-3">
				<img class="img-thumbnail rounded rounded" src="<?php echo site_url('uploads/'.$n->image);?> ">
			</div>
			<br>

			<div class="col-md-6">
				<h1><?php echo word_limiter($n->title,15) ;?></h1>
				<p style="margin:auto;" ><?php echo word_limiter( $n->description,45);?>
				<i>(Author:<?php echo $n->author;?>)</i></p>
				<p>Posted on :<?php echo $n->created_at;?></p>
				<button class="btn btn-info" style="margin-top: 5px;">read more</button>
			</div>
			</div>
		</a>
		<?php 

		} ?>
		 

<?php $this->load->view('assets/footer');?>
