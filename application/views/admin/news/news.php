 
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
 <h1 style="display: inline-block;font-weight: 400;color: #fd7e14;text-align: center; vertical-align: middle;  cursor: pointer;-webkit-user-select: none;-moz-user-select: none; -ms-user-select: none; user-select: none;background-color: transparent;border: 1px solid transparent;padding: 0.375rem 0.75rem;font-size: 3rem;line-height: 1.5;border-radius: 0.25rem;transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"><a href="<?php echo site_url('admin/news')?>">News </a></h1>
		 <hr>
		 <a href="<?php echo site_url('admin/news/add')?>" class="btn btn-info">Add New News </a>
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
 		<?php 
 				//display search eg(search result for ..... keyword search)
 				if($this->input->get('search')){
					?>
		<b>search Result for - <?php echo $this->input->get('search'); }?>  </b>
 		

 <table class="table table-bordered">
 	<tr>
 		<th><b>Title</b></th>
 		<th><b>Aurthor</b></th>
 		<th><b>Action</b></th>

 	</tr>
 	
		 <?php 
		 	// use foreach loop cos the first 2 entries where sent as arrary
		 // use arrow cos every entry is returned as object
		 // if u are using array u dont have to use arrow ... insted use $n['tittle'] $this->get->result_array();
		 foreach($news as $n)
		 {
		 	 ?>
		 	 <tr>
		 	 	 <td><?php echo $n->title;?></td>
		 	 	<td><?php echo $n->author;?></td>
		 	 	<?php // using uri segment to pass id   ?>	
		 	 	<td><a href="<?php echo site_url('admin/news/edit/'.$n->id);?>" class="btn btn-primary">edit</a> <br><br> <a href="<?php echo site_url('admin/news/delete/'.$n->id);?>"class="btn btn-danger">delete</a></td>	


		 	 </tr>
		 	 <?php  
		 }





		 ?>

 </table>
 <!---create pagination links -->
 <?php echo $this->pagination->create_links(); ?>
</section>
<?php include 'assets/footer.php'; ?>
<!-- move top -->

