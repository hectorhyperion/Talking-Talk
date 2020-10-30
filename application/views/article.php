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

		<h1> <?php echo $news->title;?> </h1> 
		<img src="<?php echo site_url('uploads/'.$news->image);?>"style="padding-left:100px; height:500px; width:600px;">
		<p style="padding-left: 30px;" > <?php echo $news->description;?></p>
		<br>
		<p style="font-family:Algerian; font-size: 25px; padding-bottom: 10px; padding-left:20px; font: italic;  " > Author:<i><?php echo $news->author;?></i></p>

		
<?php include 'asset/footer.php'; ?>
	
</div>
</body>
</html>

