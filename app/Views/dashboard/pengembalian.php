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
<form  action="<?php echo base_url('Pencarian4/cari')?>" action="GET">
<div class="mb-3">
<p></p>
<input type="text" class="form-control" name="cari" aria-describedby="cari" placeholder='Cari Nama Pengembali'>
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
<th>ISBN</th>
<th>Judul Buku</th>
<th>Status Pengembalian</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
foreach ($pengembalian as $row) {
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row->nim; ?></td>
<td><?= $row->nama; ?></td>
<td><?= $row->isbn; ?></td>
<td><?= $row->judul_buku; ?></td>
<td><?= $row->status_pengembalian; ?></td>
<td>
<a title="Edit" href="<?= base_url("pengembalian/edit/$row->nim");?>" class="btn btn-info">Status</a>
<a title="Delete" href="<?=base_url("pengembalian/delete/$row->nim") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</a>
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