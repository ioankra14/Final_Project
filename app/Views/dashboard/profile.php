<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="dist/img/AK.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Anton Kurnia</h3>

                <p class="text-muted text-center">C1955201085<br>Teknik Informatika B</p>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tentang Saya</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Profesi</strong>
                <p class="text-muted">
                   Mahasiswa
                </p>
                <hr>
                <strong><i class="fas fa-home mr-1"></i> Tempat Tinggal</strong>
                <p class="text-muted">Palangkaraya, Kalimantan Tengah</p>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i>Hobi</strong>
                <p class="text-muted">
                    <li><span class="tag tag-info">Gamer</span></li>
                    <li><span class="tag tag-info">Editing</span></li>
                </p>
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Bio</strong>
                <p class="text-muted">Lakukan apa yang menurutmu benar</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<?= $this->endSection('content'); ?>