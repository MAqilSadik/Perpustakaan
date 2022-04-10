<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href=" <?php echo base_url('assets/css/bootstrap.min.css'); ?>"rel="stylesheet">
    
	<title>Document</title>
</head>
<body>
	<?php $this->load->view("layout/header")  ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Hello, <?php echo$nama;?> </h1>
			</div>
		</div>
	
	</div>
	
    <?php $this->load->view("layout/footer")  ?>
</body>
</html>
