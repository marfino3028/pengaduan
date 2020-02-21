<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
<link href="{{('mdbpro/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
<link href="{{('mdbpro/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
<link href="{{('mdbpro/css/style.css')}}" rel="stylesheet">
</head>

<body> 
  <div class="bg">
   
      <div class="row align-items-center">
          <div class="col">
            
          </div>
          <div class="col">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <!-- Material form login -->
      <div class="card">
      
        <h5 class="card-header danger-color white-text text-center py-4">
          <strong><b>Sign in</b></strong>
        </h5>
      
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
      
          <!-- Form -->
          <form class="text-center" style="color: #757575;" action="#!">
      
            <!-- Email -->
            <div class="md-form">
              <input type="email" id="materialLoginFormEmail" class="form-control">
              <label for="materialLoginFormEmail">E-mail</label>
            </div>
      
            <!-- Password -->
            <div class="md-form">
              <input type="password" id="materialLoginFormPassword" class="form-control">
              <label for="materialLoginFormPassword">Password</label>
            </div>
      
            <div class="d-flex justify-content-around">
              <div>
                <!-- Remember me -->
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                  <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                </div>
              </div>
              <div>
                <!-- Forgot password -->
                <a href="">Forgot password?</a>
              </div>
            </div>
      
            <!-- Sign in button -->
            <button class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
      
            <!-- Register -->
            <p>Not a member?
              <a href="">Register</a>
            </p>
      
            <!-- Social login -->
            
      
          </form>
          <!-- Form -->
      
        </div>
      
      </div>
      <!-- Material form login -->
          </div>
          <div class="col">
            
          </div>
        </div>
  </div>
  <!-- SCRIPTS -->
  <!-- JQuery -->
<script type="text/javascript" src="{{('mdbpro/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{('mdbpro/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{('mdbpro/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
<script type="text/javascript" src="{{('mdbpro/js/mdb.min.js')}}"></script>
</body>

</html>