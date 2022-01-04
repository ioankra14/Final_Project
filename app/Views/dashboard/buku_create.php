<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Buku</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<?php if (!empty(session()->getFlashdata('error'))) : ?>
<div class="alert alert-light alert-dismissible fade show"
role="alert">
<h4 class="alert-heading">Periksa Entrian Form</h4>
</hr />
<?php echo session()->getFlashdata('error'); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">

<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>
<form class="form-horizontal" method="post" action="<?=base_url('buku/store') ?>"enctype="multipart/form-data">
<?= csrf_field(); ?>
<div class="card-body">

<div class="form-group row">
<label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="isbn"name="isbn" placeholder="kosong" value="<?= old('isbn'); ?>">
</div>
</div>

<div class="form-group row">
<label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="judul_buku"name="judul_buku"placeholder="Kosong" value="<?= old('judul_buku'); ?>">
</div>
</div>

<div class="form-group row">
<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="penerbit"name="penerbit"placeholder="Kosong"value="<?= old('penerbit'); ?>">
</div>
</div>

<div class="form-group row">
<label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="kategori"name="kategori"placeholder="Kosong" value="<?= old('kategori') ?>" />
</div>
</div>

<div class="form-group row">
<label for="halaman" class="col-sm-2 col-form-label">Halaman</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="halaman"name="halaman"placeholder="Kosong" value="<?= old('halaman') ?>" />
</div>
</div>

<div class="form-group row">
<label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="tahun_terbit"name="tahun_terbit"placeholder="Kosong" value="<?= old('tahun_terbit') ?>" />
</div>
</div>

<div class="form-group row">
<label for="foto_buku" class="col-sm-2 col-form-label">Foto Buku</label>
<div class="custom-file col-sm-6">
<input type="file" class="custom-file-input" id="foto_buku" name="foto_buku">
<label class="custom-file-label" for="foto_buku">Pilih Foto Buku</label>
</div>
</div>
</div>
<!-- /.card-body -->
<div class="card-footer">

<button type="submit" class="btn btn-primary">Simpan</button>


</div>
<!-- /.card-footer -->
</form>
</div>
<!-- /.card -->
</div>
<?= $this->endSection('content'); ?>