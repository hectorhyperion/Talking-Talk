<!DOCTYPE html>
<html lang="zxx">
<head>
<title>The Talking-Talk</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url('asset/css/style.css')?>" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
</head>
<body>

<?php include 'asset/header.php'; ?>


	<div class="clear"></div>
	
	<div class="wrap">

<div class="main" >
		<h1 style=" font-family:algerian; padding-top:30px; font-size: 50px; padding-left: 50px; " > NEWS PREVIEW</h1>
		<div class="content" style="padding-left:90px;">
			<div class="box1">
	
	
	<div class="data">
					<div class="row">
		<?php 
			//using foreach loop to display news....
		foreach($news as $n)
		{
		?>
		<a href="<?php echo site_url('index/detail/'.$n->id)?>" style="text-decoration: none;">
		<div class="col-md-3">
			<img class="img-fluid"src="<?php echo site_url('uploads/'.$n->image);?>">
		</div>	
		<div class="col-md-6"  style="font-family: times new roman;">
			<h1 style="color: black;"><?php echo $n->title;?></h1>
			<p><?php echo substr($n->description ,0,200).'...' ;?>
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
		
		
		

 		   
	<div class="page_bottom"><p>Back To : <a href="index">Top</a> | <a href="index">Home</a></p></div>
		 <?php echo $this->pagination->create_links();?>

			</div></div></div>
		
			<?php include 'asset/sidebar.php'; ?>
			</div>
			<div class="clear" ></div>
	<div class="page_bottom">
		<div class="clear" ></div>

	<?php include 'asset/footer.php';?>
</div>