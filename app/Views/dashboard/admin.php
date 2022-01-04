<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <div class="info">
                <a href="<?= route_to('user.profile') ?>" class="btn btn-primary">Anton Kurnia</a>
                <div class="text-center">
                <hr />
                <img class="img-fluid img-rectangle" src="dist/img/AK.jpg" alt="User profile picture">
                </div>
               </div>
              </div>
            </div>
          </div>
			  
		  <div class="col-lg-4">
           <div class="card">
            <div class="card-body">
             <div class="info">
              <a href="<?= route_to('user.profile2') ?>" class="btn btn-primary">Elky Foriadi Ungkup</a>
              <hr />
              <img class="img-fluid img-rectangle" src="dist/img/EF.jpg" alt="User profile picture 2">
              </div>
             </div>
            </div>
           </div>

           <div class="col-lg-4">
            <div class="card">
             <div class="card-body">
              <div class="info">
              <a href="<?= route_to('user.profile3') ?>" class="btn btn-primary">Sepno Lianto</a>
              <hr />
              <img class="img-fluid img-rectangle" src="dist/img/SL.jpg" alt="User profile picture 3">
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