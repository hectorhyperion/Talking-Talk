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
				<h1><?php echo word_limiter($n->title,15) ;?></h1>
				<p><?php echo word_limiter( $n->description,30);?>
				<i>(Author:<?php echo $n->author;?>)</i></p>
				<p>Posted on :<?php echo $n->created_at;?></p>
			</div>
			</div>
		</a>
		<?php 

		} ?>
		 

<?php $this->load->view('assets/footer');?>