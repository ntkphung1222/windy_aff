{{-- @extends('layouts.client')
@section('content') --}}
<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Windy</title>
    <script src="https://kit.fontawesome.com/95ff9730e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/custom.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
      .container{
          margin:20px;
      }
      h2{
          color:green;
      }
      .dropdown-toggle::after {
          display: none !important;
      }
      .fa {
          margin:2px;
          color:white;
      }
      </style>
  </head>

<body class="container-xl">
    <header style="position:relative;background-color: #3DBCAF; justify-content: center;text-align: center">
        <div style="padding: 1%">
            <img style="height: 20%; width: 20%; border-radius: 100%;justify-content: center;text-align: center; "
                src="{{ URL::to('/assets/clients/images/avatar.jpg') }}">
        </div>
        @if (!empty($user))
            @foreach ($user as $u)
                <div>
                    <h6 style="padding: 0px; margin: 0%">{{ $u->name }}</h6>
                </div>
                <div style="margin-bottom:2px ">
                    <p>{{ $u->bio }}</p>
                </div>
            @endforeach
        @else
            <p>no</p>
        @endif

    </header>
  
    <main>
        <div class="content">
            <div class="card">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand ml-2">
                            <div class="dropdown">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                    
                                    <a href="javascript:void(0);" class="icon" onclick="geeksforgeeks()">

                                        <!-- Changing the default icon with toggle-->
                                        <i onclick="myFunction(this)" class="fa-sharp fa-solid fa-bars"></i>
                                        {{-- <i class="fa-sharp fa-solid fa-bars"></i> --}}
                                    </a>
                                </button>
                                <!-- Dropdown options -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Option A</a>
                                    <a class="dropdown-item" href="#">Option B</a>
                                    <a class="dropdown-item" href="#">Option C</a>
                                    <a class="dropdown-item" href="#">Option D</a>
                                </div>
                            </div>
                        </a>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
                <div class="card-body">
                    <div class="card-group row">
                        @foreach ($product as $p)
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 px-2">
                                <a style="text-decoration: none" href="{{ $p->product_link }}">
                                    <div class="card books mb-3">
                                        <img src={{ "$p->product_img" }} class="card-img-top" />
                                        <div class="card-body p-2">
                                            <h5 style="color:black" class="card-title mb-1">{{ $p->product_name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer style="margin-top: 1%;padding: 1px;font-size:10%;background-color:  #3DBCAF; height: 5%;text-align: center">
        <h6 style="color:black">Created by <a style="text-decoration: none"href="/admin/login">Windy</a></h6>
    </footer>
    <script src="{{ asset('assets/clients/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/clients/js/bootstrap.bundle.js') }}"></script>


</body>

</html>
{{-- @endsection --}}
