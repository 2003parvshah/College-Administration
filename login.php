<?php include('header.php') ?>
  <section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
      <div class="card">
        <div class="card-body my-4">
          <div class="border rounded-circle mx-auto d-flex my-4" style="width:100px;height:100px" ><i class="fa fa-user text-light fa-3x m-auto"></i></div>
          <form action="actions/login.php" method="POST">
            <!-- Material input -->
            <div class="form-outline my-4" data-mdb-input-init>
                <input type="text" id="email" name="email" class="form-control" />
                <label class="form-label" for="email">Email</label>
            </div>
            <div class="form-outline my-4" data-mdb-input-init>
                <input type="text" id="password" name="password" class="form-control" />
                <label class="form-label" for="password">Password</label>
            </div>
            <div class="text-center">
              <button class="btn btn-secondary btn-block bttn-dark" name="login">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php include('footer.php') ?>