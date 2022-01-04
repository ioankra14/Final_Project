<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12">
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
<img class="img-fluid img-rectangle"src="<?php echo base_url('buku/'.$buku->foto_buku.'');?>" width="240px" height="340px" alt="book picture">
</div>
<p class="text-muted text-center"><?= $buku->isbn; ?></p>
</div>
</div>
</div>

<?php if (!empty(session()->getFlashdata('error'))) : ?>
<div class="alert alert-light alert-dismissible fade show"role="alert">
<h4 class="alert-heading">Periksa Entrian Form</h4>
</hr />
<?php echo session()->getFlashdata('error'); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">

<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>

<div class="col-md-9">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Edit Data Buku</h3>
</div>
<form class="form-horizontal" method="post" action="<?=base_url('buku/update/' . $buku->isbn) ?>"enctype="multipart/form-data">
<?= csrf_field(); ?>
<div class="card-body">

<div class="form-group row">
<label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="judul_buku"name="judul_buku" value="<?= $buku->judul_buku; ?>">
</div>
</div>

<div class="form-group row">
<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="penerbit"name="penerbit" value="<?= $buku->penerbit; ?>">
</div>
</div>

<div class="form-group row">
<label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="kategori"name="kategori" value="<?= $buku->kategori; ?>" />
</div>
</div>

<div class="form-group row">
<label for="halaman" class="col-sm-2 col-form-label">Halaman</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="halaman"name="halaman" value="<?= $buku->halaman; ?>" />
</div>
</div>

<div class="form-group row">
<label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="tahun_terbit"name="tahun_terbit" value="<?= $buku->tahun_terbit; ?>" />
</div>
</div>

<div class="form-group row">
<input type="hidden" id="fotobukulama" name="fotobukulama" value="<?=$buku->foto_buku; ?>">
<label for="foto_buku" class="col-sm-2 col-form-label">Foto Buku</label>
<div class="custom-file col-sm-6">
<input type="file" class="custom-file-input" id="foto_buku" name="foto_buku">
<label class="custom-file-label" for="foto_buku"><?= $buku->foto_buku;?></label>
</div>
</div>
</div>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</div>
<!-- /.card-footer -->
</form>
</div>
</div>
</div>
<!-- /.card -->
</div>
<?= $this->endSection('content'); ?>