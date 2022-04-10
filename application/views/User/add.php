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
						<center><h1>Tambah User</h1></center>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<form action= "<?php echo base_url('user/insert') ?>" method="post" enctype="multipart/form-data">
									<div class="mb-3">
										<label for="nama" class="form-label">Nama</label>
										<input type="text" name="nama" class="form-control" id="nama">
									</div>
									<div class="mb-3">
										<label for="email" class="form-label">Email</label>
										<input type="text" name="email" class="form-control" id="email">
									</div>
									<div class="mb-3">
										<label for="alamat" class="form-label">Alamat</label>
										<input type="text" name="alamat" class="form-control" id="alamat">
									</div>
									<div class="mb-3">
										<label for="telepon" class="form-label">Telepon</label>
										<input type="text" name="telepon" class="form-control" id="telepon">
									</div>
									<div class="mb-3">
										<label for="foto" class="form-label">Foto</label>
										<input type="file" name="foto" class="form-control" accept="image/" id="foto">
									</div>
									<center><button type="submit" class="btn btn-primary">Tambah</button></center>
								</form>
						</div>
					</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>