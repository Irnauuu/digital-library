<body class="login-page" style='height: auto;  background-image: url("layouts/back.jpeg");
  background-position: center;
  background-repeat: no-repeat; 
  background-size: cover; '>
  <div class="container">
  <div class="row mt-5 mb-5 justify-content-center">
  <div class="col-md-6">
      <div class="card">
          <div class="card-header">
            <p class="text-center"><strong>Register Digital Library</strong></p>
          </div>
          <form action="index.php?page=postregister" method="POST" id="logForm">
          <div class="card-body">
          <div class="form-group">
                <input type="text" class="form-control" name="UserID" hidden>
          </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="Username" required>
          </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="Password" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="Email" required>
            </div>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" name="NamaLengkap" required>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="Alamat" class="form-control" cols="30" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Daftar</button>
            <hr>
            <a href="index.php?page=login">Kembali ke Login</a>
          </div>
          </form>
        </div>
  </div>
  </div>
</div><!-- jQuery -->