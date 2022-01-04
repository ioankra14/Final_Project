<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
			  
		  <div class="col-lg-6">
           <div class="card">
            <div class="card-body">
             <div class="info">
              <a href="<?= route_to('user.peminjaman') ?>" class="btn btn-primary">Peminjaman</a>
              <hr />
              </div>
             </div>
            </div>
           </div>

           <div class="col-lg-6">
            <div class="card">
             <div class="card-body">
              <div class="info">
              <a href="<?= route_to('user.pengembalian') ?>" class="btn btn-primary">Pengembalian</a>
              <hr />
             </div>
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