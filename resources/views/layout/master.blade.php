<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="ml-5">
                <i class="fas fa-home fa-5x"></i>
            </div>
            <div class="ml-5">
                <span>Sweet Home</span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Life style</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0 " style="margin-left: 300px">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>
    <div class="main-content mt-3 row">

        <div class="col-md-9">
            @section('content')
            @show()
        </div>
        <div class="col-md-3">
        </div>
    </div>
    </div>
    <footer class="text-center mt-5">
        <p>Bản quyền thuộc về FPT Aptech 2018</p>
    </footer>
</div>
</body>
</html>