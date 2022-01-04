<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12">
<section class="content">

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
<h3 class="card-title">Edit Data Pengembalian</h3>
</div>
<form class="form-horizontal" method="post" action="<?=base_url('pengembalian/update/' . $pengembalian->nim) ?>"enctype="multipart/form-data">
<?= csrf_field(); ?>
<div class="card-body">

<div class="form-group row">
<label for="status_pengembalian" class="col-sm-2 col-form-label">Status Pengembalian</label>
<div class="col-sm-6">
<select name="status_pengembalian" class="form-control"id="status_pengembalian">
<option value="Late" <?= ($pengembalian->status_pengembalian== "Late" ? "selected" : ""); ?>>Late</option>
<option value="On-time" <?= ($pengembalian->status_pengembalian == "On-time" ? "selected" : ""); ?>>On-time</option></select>
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