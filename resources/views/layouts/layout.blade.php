<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Z-Part</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="hold-transition sidebar-mini">

    <div class="site-section">
        <div class="menu-block-left">
            <div class="container">
                <div class="row line-name-account">
                    <div class="col-4">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="col-8 name-account">
                        <p class="">{{ $user->name }}</p>
                    </div>
                </div>
                <div class="row">
                    @yield('menu-account-left')
                </div>
            </div>
        </div>

        <div class="center-information">
            <div class="block-info-site">
                <div class="container name-section">
                    <div class="row row-name-section">
                        <div class="col-6 align-self-center">
                            <p class="name-page">{{ $nameSection }}</p>
                        </div>
                        <div class="col-3 offset-md-3 align-self-center">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link icon-logout" href="{{ route('logout_user') }}" role="button">
                                        <i class="bi bi-box-arrow-in-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="page-information">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>



    <footer class="main-footer py-3">
        <p class="text-center text-muted">Copyright &copy; 2021</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<script src="/js/cabinet.js"></script>

</body>
</html>
