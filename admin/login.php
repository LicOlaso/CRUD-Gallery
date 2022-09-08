<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
h3{
    -webkit-text-stroke: 1px white;
    color:transparent;
    font-size: 42px;

}
body{
    background-image: url('../assets/img/bg.jpg');
    background-size:cover;
    background-repeat:no-repeat;
}
div{
    margin: 0 !important;
    padding: 0 !important;
}
    .box{
        display: flex;
  flex-flow: column wrap;
    }
    .box img{
  width: 100%;
  height: auto;
}
    @supports(object-fit: cover){
    .box img{
      height: 100%;
      object-fit: cover;
      object-position: center center;
    }
}
</style>
<body>
    <div class="container">
        <div class="row col-sm-10 col-md-6 position-absolute top-50 start-50 translate-middle">
            <h3 class="ml-3">Login</h3>
            <div class="card large shadow" >
                
                <div class="row g-0">
                    
                  <div class="col-sm-6 col-xs-12 "style="display: flex; align-items: center;">
                    
                    <div class="card-body" >
                      
                      <form action="actions/login.act.php" method="post" class="form m-3">
                                      <div class="form-group row">
                                          <label for="email_address" class="col-xs-12  col-form-label text-md-right">E-Mail Address</label>
                                          <div class="col-xs-12">
                                              <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                          </div>
                                      </div>
            
                                      <div class="form-group row">
                                          <label for="password" class="col-xs-12 col-form-label text-md-right">Password</label>
                                          <div class="col-xs-12">
                                              <input type="password" id="password" class="form-control" name="password" required>
                                          </div>
                                      </div>
                                      <div class="col-xs-12 offset-md-4 mt-2">
                                          <button type="submit" class="btn btn-primary">
                                              Login
                                          </button>
                                      </div>
                      </form>
                    </div>
                  </div>
                  <div class="box col-sm-6 col-xs-12 ">
                    <img src="../assets/img/login.jpg" class="img-fluid" alt="Login">
                  </div>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

