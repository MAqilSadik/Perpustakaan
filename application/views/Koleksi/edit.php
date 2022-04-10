<link href=" <?php echo base_url('assets/css/bootstrap.min.css'); ?>"rel="stylesheet">
<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('koleksi/update/' . $detail['id']) ?>" method="post" enctype="multipart/form-data">
                              <div class="mb-3">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input value="<?php echo $detail['judul']; ?> " type="text" name="judul" class="form-control" id="judul">
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerbit" class="form-label">Penerbit</label>
                                        <input value="<?php echo $detail['penerbit']; ?> "type="text" name="penerbit" class="form-control" id="penerbit">
                                    </div>
                                    <div class="mb-3">
                                        <label for="penulis" class="form-label">Penulis</label>
                                        <input value="<?php echo $detail['penulis']; ?> " type="text" name="penulis" class="form-control" id="penulis">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <input value="<?php echo $detail['kategori']; ?> " type="text" name="kategori" class="form-control" id="kategori">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cover" class="form-label">Cover</label>
                                        <input type="file" name="cover" class="form-control" accept="image/" id="cover">
                                    </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>