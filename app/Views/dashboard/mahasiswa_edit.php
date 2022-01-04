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
<img class="profile-user-img img-fluid img-circle"src="<?php echo base_url('img/'.$mahasiswa->foto.'');?>" alt="User profile picture">
</div>
<p class="text-muted text-center"><?= $mahasiswa->nim; ?></p>
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
<h3 class="card-title">Edit Data Profil</h3>
</div>
<form class="form-horizontal" method="post" action="<?=base_url('mahasiswa/update/' . $mahasiswa->nim) ?>"enctype="multipart/form-data">
<?= csrf_field(); ?>
<div class="card-body">

<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Nama</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="nama"name="nama" value="<?= $mahasiswa->nama; ?>">
</div>
</div>

<div class="form-group row">
<label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="jurusan"name="jurusan" value="<?= $mahasiswa->jurusan; ?>">
</div>
</div>

<div class="form-group row">
<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
<div class="col-sm-6">
<select name="jenis_kelamin" class="form-control"id="jenis_kelamin">
<option value="pria" <?= ($mahasiswa->jenis_kelamin== "pria" ? "selected" : ""); ?>>Pria</option>
<option value="wanita" <?= ($mahasiswa->jenis_kelamin == "wanita" ? "selected" : ""); ?>>Wanita</option></select>
</div>
</div>

<div class="form-group row">
<label for="no_telp" class="col-sm-2 col-form-label">NoTelp</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="no_telp"name="no_telp" value="<?= $mahasiswa->no_telp; ?>" />
</div>
</div>

<div class="form-group row">
<label for="email" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="email"name="email" value="<?= $mahasiswa->email; ?>" />
</div>
</div>

<div class="form-group row">
<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
<div class="col-sm-10">
<textarea class="form-control" name="alamat"id="alamat"><?= $mahasiswa->alamat; ?></textarea>
</div>
</div>

<div class="form-group row">
<input type="hidden" id="fotolama" name="fotolama" value="<?=$mahasiswa->foto; ?>">
<label for="foto" class="col-sm-2 col-form-label">Foto Diri</label>
<div class="custom-file col-sm-6">
<input type="file" class="custom-file-input" id="foto" name="foto">
<label class="custom-file-label" for="foto"><?= $mahasiswa->foto;?></label>
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