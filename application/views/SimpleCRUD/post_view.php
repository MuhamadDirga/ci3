<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MY BLOG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  	<script src="assets/js/bootstrap.min.js"></script>

	
</head>
<body>
 <main role="main" class="container">
    <h1 class="text-center"><?php echo $records[0]['title'] ?></h1>
    <h6 class="text-muted">Tanggal : <?php echo  $records[0]['date']  ?></h6>
    <div class="row">
          <div class="col-2"> </div>
          <div class="col-8"> 
    <img src="<?php echo  base_url() ?>uploads/<?php echo $records[0]['image_file']  ?>" alt=" " class="">
          </div>
          <div class="col-2"> </div>
          <p><?php echo $records[0]['content'] ?></p>
        </div>
    </main> 
</body>
</html>