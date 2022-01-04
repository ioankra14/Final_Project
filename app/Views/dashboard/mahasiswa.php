<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">

<?php if (!empty(session()->getFlashdata('message'))) : ?>
<div class="alert alert-success alert-dismissible fade show"
role="alert">
<?php echo session()->getFlashdata('message'); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">

<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>

<a href="<?= base_url('/mahasiswa/create'); ?>" class="btn btn-primary">Tambah +</a>
<hr />
<form  action="<?php echo base_url('Pencarian2/cari')?>" action="GET">
<div class="mb-3">
<p></p>
<input type="text" class="form-control" name="cari" aria-describedby="cari" placeholder='Cari Nama'>
</div>
<button type="submit" class="btn btn-primary" value="cari">Cari</button>
</form>
<hr />
<table class="table table-bordered">
<thead>
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>No Telp</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
foreach ($mahasiswa as $row) {
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row->nim; ?></td>
<td><?= $row->nama; ?></td>
<td><?= $row->jurusan; ?></td>
<td><?= $row->no_telp; ?></td>
<td>
<a title="View" href="<?=base_url("mahasiswa/view/$row->nim"); ?>" class="btn btn-info">View</a>
<a title="Edit" href="<?= base_url("mahasiswa/edit/$row->nim");?>" class="btn btn-info">Edit</a>
<a title="Delete" href="<?=base_url("mahasiswa/delete/$row->nim") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</a>
</td>

</tr>
<?php
}
?>
</tbody>
</table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>