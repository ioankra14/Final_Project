<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">

			  <img src="dist/img/STMIK.jpg" width="882px" height="550px" alt="Gambar 1"/>
                </div>
                </div>
                </div>

          <div class="col-lg-2">
            <div class="card">
              <div class="card-body">
				      	<tr>
					    	<p>Tambah Data Mahasiswa</p>
				      	</tr>
						<p></p>
						<a  href="<?= base_url('/mahasiswa/create'); ?>" class="btn btn-primary">Tambah + </a>
                </div>
                </div>
              </div>
			  
			  <div class="col-lg-2">
            <div class="card">
              <div class="card-body">
                
				      	<tr>
					    	<td>Tambah Data Buku</td>
				      	</tr>
						<p></p>
			            <a href="<?= base_url('/buku/create'); ?>" class="btn btn-primary">Tambah + </a>
			          
                </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection('content'); ?>