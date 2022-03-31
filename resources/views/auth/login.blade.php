
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('/') }}vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/') }}css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      
              
              <div class="col-lg-6 ">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                  </div>
                  <form class="user" method="post" action="{{ route('proses-login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    
                   <button type="submit" class="form-control form-control-user btn-warning mb-3 btn-sm">
                        Login
                   </button>
                    <a href="{{ route('register') }}" class="btn btn-danger btn-user btn-block">
                      Register
                    </a>

                  </form>
                
                 
                 
               
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('/') }}vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('/') }}vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('/') }}js/sb-admin-2.min.js"></script>

</body>

</html>
