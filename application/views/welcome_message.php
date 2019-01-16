<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Upload Image</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/min/dropzone.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/min/basic.min.css">

	<script src="<?php echo base_url();?>assets/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/min/dropzone.min.js"></script>
	<style type="text/css">
		body{
			background-color: #E8E9EC;
		}
		.dropzone{
			margin-top: 100px;
			border: 2px dashed #0087F7;
		}
	</style>
</head>
<body>
<h1>Upload Dropsize</h1>
<div class="dropzone">
	<div class="dz-message">
		<h3>Klik atau drop gambar disini</h3>
	</div>
</div>


<script type="text/javascript">
	Dropzone.autoDiscover = false;

	var foto_upload= new Dropzone(".dropzone",{
	url: "<?php echo base_url('index.php/welcome/proses_upload') ?>",
	maxFilesize: 2,
	method:"post",
	acceptedFiles:"image/*",
	paramName:"userfile",
	dictInvalidFileType:"Type file ini tidak dizinkan",
	});

</script>
</body>
</html>