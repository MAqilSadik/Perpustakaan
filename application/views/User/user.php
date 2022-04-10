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
	<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
        	<?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <h1>Data User</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tabel User</h5>
                    <a href="user/add" class="btn btn-success">Tambah User</a>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        <?php foreach ($list as $item) { ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['nama']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php echo $item['telepon']; ?></td>
                                <td>
                                    <a href="user/detail/<?php echo $item['id']; ?>" class="btn btn-info">Detail</a>
                                    <a href="user/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a onclick="konfirmasi(<?php echo $item['id']; ?>)" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function konfirmasi(id) {
        let text = "Yakin Dihapus Kawan?";
        if (confirm(text) == true) {
            window.location.href = 'user/delete/' + id;
        }
    }
</script>

<?php $this->load->view('layout/footer'); ?>
</body>
</html>
