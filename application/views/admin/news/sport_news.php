 
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>The Talking-Talk Admin</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style-starter.css')?>">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>
 
<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
  <?php include 'assets/sidebar.php'; ?>
 <?php include 'assets/header.php'; ?>
  <!-- main content start -->
 <?php include 'assets/main.php'?>
 <h1>News</h1>
 	<a href="<?php echo site_url('admin/sport_news/sport_add')?>" class="btn btn-info">Add New News </a>
		 <hr>
		 	<?php // echo flashdata 
		 	if($this->session->flashdata('success'))
		 	{
		 		?>
		 	
			 <div class="alert alert-success" role="alert" >
		 	 <?php

				 echo $this->session->flashdata('success');
		 ?>
		 	 </div>
		 	 <?php 
		 }?>
 <table class="table table-bordered">
 	<tr>
 		<th>Title</th>
 		<th>Aurthor</th>
 		<th>Action</th>

 	</tr>
 	
		 <?php 
		 	// use foreach loop cos the first 2 entries where sent as arrary
		 // use arrow cos every entry is returned as object
		 // if u are using array u dont have to use arrow ... insted use $n['tittle'] $this->get->result_array();
		 foreach($sport_news as $n)
		 {
		 	 ?>
		 	 <tr>
		 	 	<td><?php echo $n['title'];?></td>	
		 	 	<td><?php echo $n['author'];?></td>	
		 	 	<td><a href="<?php echo site_url('admin/sport_news/edit/'.$n['id']);?>" class="btn btn-primary">edit</a> 
	 	 		<a href="<?php echo site_url('admin/sport_news/delete/'.$n['id']);?>"class="btn btn-danger">delete</a></td>	


		 	 </tr>
		 	 <?php  
		 }


		 ?>

 </table>
</section>
<?php include 'assets/footer.php'; ?>
<!-- move top -->

