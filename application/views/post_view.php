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
<div id="head">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">My Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">HOME<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url('blog/post')?>">POST</a></li>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
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