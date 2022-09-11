<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Windy</title>
    <script src="https://kit.fontawesome.com/95ff9730e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}"/>
</head>
<body class="container-xl">
    <header style="position:relative;background-color: #3DBCAF; justify-content: center;text-align: center" >
        <div style="padding: 1%">
            <img style="height: 20%; width: 20%; border-radius: 100%;justify-content: center;text-align: center; "  src="{{ URL::to('/assets/clients/images/avatar.jpg') }}">
        </div>
        <div >
           <h6 style="padding: 0px; margin: 0%">Kim Phung</h6>
        </div >
        <div style="margin-bottom:2px ">
            <p>bio ne</p>
            <i class="fa-light fa-square-xmark"></i>
        </div>
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