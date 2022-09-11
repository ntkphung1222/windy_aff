<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Windy</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/custom.css') }}"/>
    <script src="https://kit.fontawesome.com/95ff9730e0.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/clients/js/bootstrap.bundle.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}"/>

</head>
<body class="container">
    <header >
        <nav class="navbar navbar-expand-lg navbar-light text-header" style="background-color:  #3DBCAF;">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse row" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item col-2 col-sm-2 col-md-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">Products</a>
                  </li>
                  <li class="nav-item col-2 col-sm-2 col-md-2">
                    <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                  </li>
                  <li class="col-6 col-sm-6 col-md-6"></li>
                  <li class="nav-item dropdown col-2 col-sm-2 col-md-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>       
    </header>
    <main>
    <div class="content">
        @yield('content')
    </div>
    </main>
    <footer style="margin-top: 1%;padding: 1px;font-size:10%;background-color:  #3DBCAF; height: 5%;text-align: center">
        <h6>Created by <a href="/admin/login">Windy</a></h6>
    </footer>
</body>
</html>