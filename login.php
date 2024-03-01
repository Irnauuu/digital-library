<body style =' background-image: url("layouts/back.jpeg");
  background-position: center;
  background-repeat: no-repeat; 
  background-size: cover; 
'>
<div class="col-md-3 mb-5 mt-5">
      <div class="card">
          <div class="card-header">
          <center><img src="A.png" alt="#" width=250  ></center>
            <p class="text-center"><strong>Login Digital Library</strong></p>
          </div>
          <form action="index.php?page=postlogin" method="POST" id="logForm">
            
          <div class="card-body">
          <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" required>
        </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" required>
        </div>
            <button type="submit" class="btn btn-primary btn-sm">Login</button>
            <hr>
            <a href="index.php?page=register">Registrasi</a>
          </div>
          </form>
        </div>
  </div>
</body>