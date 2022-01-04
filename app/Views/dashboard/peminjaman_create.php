<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Peminjaman</h3>
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
<form class="form-horizontal" method="post" action="<?=base_url('peminjaman/store') ?>"enctype="multipart/form-data">
<?= csrf_field(); ?>
<div class="card-body">

<div class="form-group row">
<label for="nim" class="col-sm-2 col-form-label">NIM</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="nim"name="nim" placeholder="kosong" value="<?= old('nim'); ?>">
</div>
</div>

<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Nama</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="nama"name="nama"placeholder="Kosong" value="<?= old('nama'); ?>">
</div>
</div>

<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">ISBN</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="isbn"name="isbn"placeholder="Kosong" value="<?= old('isbn'); ?>">
</div>
</div>

<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Judul Buku</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="judul_buku"name="judul_buku"placeholder="Kosong" value="<?= old('judul_buku'); ?>">
</div>
</div>

<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Lama Peminjaman (Hari)</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="lama_peminjaman"name="lama_peminjaman"placeholder="Kosong" value="<?= old('lama_peminjaman'); ?>">
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