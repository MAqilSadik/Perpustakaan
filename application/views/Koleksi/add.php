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
						<center><h1>Tambah Buku</h1></center>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<form action="insert" method="post" enctype="multipart/form-data">
									<div class="mb-3">
										<label for="judul" class="form-label">Judul</label>
										<input type="text" name="judul" class="form-control" id="judul">
									</div>
									<div class="mb-3">
										<label for="penerbit" class="form-label">Penerbit</label>
										<input type="text" name="penerbit" class="form-control" id="penerbit">
									</div>
									<div class="mb-3">
										<label for="penulis" class="form-label">Penulis</label>
										<input type="text" name="penulis" class="form-control" id="penulis">
									</div>
									<div class="mb-3">
										<label for="kategori" class="form-label">Kategori</label>
										<input type="text" name="kategori" class="form-control" id="kategori">
									</div>
									<div class="mb-3">
										<label for="cover" class="form-label">Cover</label>
										<input type="file" name="cover" class="form-control" accept="image/" id="cover">
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