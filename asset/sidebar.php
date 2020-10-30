<div class="sidebar" style="padding-right: 60px; " >
<div class="side_top">
			 
		<h2 style=" font-family:algerian; padding-top:30px; font-size: 30px; "> Recent feed</h2>
		 
		<?php 
			//using foreach loop to display news....
		foreach($news as $n)
		{
		?>
		<a href="<?php echo site_url('index/detail/'.$n->id)?>" style="text-decoration: none;">
		<div class="col-md-3" style="padding-right: 50px;" >
			<img class="img-fluid"src="<?php echo site_url('uploads/'.$n->image);?>"style="width: auto;">
		</div>	
		<div class="col-md-6"  style="font-family: times new roman;">
			<h1 style="color: black;"><?php echo substr($n->title,0,50).'...';?></h1>
			<p><?php echo substr($n->description,0,100).'...' ;?>
				(<b>Author:<?php echo $n->author; ?></b>)</p>

		</div>
		<div class="clear"></div>
		
	</a>
			<?php
		}

 ?>

		

		</div>
				</div>
			<div class="clear"></div> 
			<div class="clear"></div>
			</div>
	<div class="clear"></div>
	</div>
</div>