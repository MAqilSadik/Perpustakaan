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
	<div class="row">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h1>Detail User</h1>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-8">
								<h4 class="card-title">nama <?php echo $detail['nama'] ?> </h4>
								<h6>Email :<?php echo $detail['email'] ?></h6>
								<h6>Telepon :<?php echo $detail['telepon'] ?></h6>
								<h6>Alamat :<?php echo $detail['alamat'] ?></h6>
							</div>
							<div class="col-4">
							 <img style="width:150px" src="<?php echo base_url($detail['foto']); ?>">
							</div>
						</div>
					</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>