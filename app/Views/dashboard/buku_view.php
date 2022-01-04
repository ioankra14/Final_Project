<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12">
<!-- general form elements -->
<section class="content">
<div class="container-fluid">
<div class="row">
<!-- /.card-header -->
<!-- form start -->
<div class="col-md-3">
<!-- Profile Image -->
<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
<img class="img-fluid img-rectangle "src="<?php echo base_url('buku/'.$buku->foto_buku.'');?>" width="240px" height="340px"  alt="book picture">
</div>
<h3 class="profile-username text-center"><?=$buku->judul_buku; ?></h3>
<p class="text-muted text-center"><?= $buku->isbn; ?>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<div class="col-md-9">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Info Tentang Buku <?=$buku->judul_buku; ?></h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<strong><i class="fas fa-pen mr-1"></i>Penerbit</strong>
<p class="text-muted"><?= $buku->penerbit;?></p>
<hr>
<strong><i class="fas fa-boxes mr-1"></i>Kategori</strong>
<p class="text-muted"><?= $buku->kategori;?></p>

<hr>
<strong><i class="fas fa-book-open mr-1"></i>Halaman</strong>
<p class="text-muted"><?= $buku->halaman; ?></p>

<hr>
<strong><i class="fas fa-calendar mr-1"></i>Tahun Terbit</strong>
<p class="text-muted"><?= $buku->tahun_terbit;
?></p>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
<!-- /.card -->
</div>
</div>
<?= $this->endSection('content'); ?>