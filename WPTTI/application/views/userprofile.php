    <div class="main">
      <h2><center>Your Profile</center></h2>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= base_url('assets/foto/').$user['foto']; ?>" class="card-img">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="<?= $user['username']; ?>"></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <p style="padding-left: 3rem;padding-top: 2rem;padding-bottom: 1.5rem;">
          Name                  : <br>
          Place, Date of Birth  : <br>
          Registration Number   : <br>
          NIM                   : <br>
          Major ( if any )      : <br>
          Numbered of Test      : <br>
          Test Score            : <br>
      </p>

    </div>
