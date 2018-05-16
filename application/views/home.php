<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="assets/css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--Script-->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

	
</head>
<body>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="table-responsive">
<h1>Biodata Saya dari Array</h1>
<table class="table table-hover">
<tbody>
<?php foreach ($biodata_array as $key) {?>
<tr>
	<td><?php echo $key['nama'] ?></td>
</tr>
<tr>
	<td><?php echo $key['nim'] ?></td>
</tr>
<tr>
	<td><?php echo $key['alamat'] ?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</table>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<div class="table-responsive">
<h1>Biodata Saya dari Object</h1>
<table class="table table-hover">
<tbody>
<?php foreach ($biodata_object as $key) {?>
<tr>
	<td><?php echo $key->nama ?></td>
</tr>
<tr>
	<td><?php echo $key->nim ?></td>
</tr>
<tr>
	<td><?php echo $key->alamat ?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</table>

</body>
</html>