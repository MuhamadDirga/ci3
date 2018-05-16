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
      <div class="row">
        <div class="col">
          <?php echo  $error ?>
          <?php echo form_open_multipart('Blog/add_action');?>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="Author">
  </div>
<div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" name="content" placeholder="Content">
  </div>
  <div class="form-group">
    <label for="image_file">Image</label>
    <input type = "file" name = "image_file" size = "20" /> 
  </div>
  <input type="submit" name="add" value="Tambah" class="btn btn-success">
          </form>
        </div>
      </div>
    </main>     
</body>
</html>