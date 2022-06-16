<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta content="Clont - Bootstrap Webapp Responsive Dashboard Simple Admin Panel Premium HTML5 Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="Admin, Admin Template, Dashboard, Responsive, Admin Dashboard, Bootstrap, Bootstrap 4, Clean, Backend, Jquery, Modern, Web App, Admin Panel, Ui, Premium Admin Templates, Flat, Admin Theme, Ui Kit, Bootstrap Admin, Responsive Admin, Application, Template, Admin Themes, Dashboard Template">

    <!-- Title -->
    <title>RECRUITMENT PORTAL</title>

    <!--Favicon -->
    <link rel="icon" href="mdh/images/brand/favicon.ico" type="image/x-icon">

    <!-- Style css -->
    <link href="mdh/css/style.css" rel="stylesheet">

    <!---Icons css-->
    <link href="mdh/plugins/web-fonts/icons.css" rel="stylesheet">
    <link href="mdh/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="mdh/plugins/web-fonts/plugin.css" rel="stylesheet">

    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>
<body class="h-100vh">
<div class="page comb-page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col  mx-auto">
                    <div class="text-center mb-6">
                        <a class="navbar-brand" href="{{ url('/') }}">

                            <img src="mdh/images/brand/logo.png" class="header-brand-img desktop-lgo"  alt="Clont logo">
                        </a>
                        {{--                    <img src="mdh/images/brand/logo1.png" class="header-brand-img dark-logo" alt="Clont logo">--}}
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card-group mb-0">
                                <div class="card p-4">
                                    <div class="card-body">
                                        <h1>Login</h1>
                                        <p class="text-muted">Sign In to your account</p>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="input-group mb-4">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
                                                </div>


                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                    </div>
                                </div>
                                <div class="card text-white bg-primary py-5 d-md-down-none ">
                                    <div class="card-body text-center justify-content-center ">
                                        <h2>Mdh Ajira Portal</h2>
                                        <br>
                                        <p>MDH DO NOT have any agents and DO NOT charge any fees to the interested candidates. Kindly note that only shortlisted applicants will be contacted. </p>
                                        <a href="{{ route('register') }}" class="btn btn-secondary mt-3">Register Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery js-->
<script src="mdh/js/vendors/jquery-3.4.0.min.js"></script>

<!-- Bootstrap4 js-->
<script src="mdh/plugins/bootstrap/popper.min.js"></script>
<script src="mdh/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Othercharts js-->
<script src="mdh/plugins/othercharts/jquery.sparkline.min.js"></script>

<!-- Circle-progress js-->
<script src="mdh/js/vendors/circle-progress.min.js"></script>

<!-- Jquery-rating js-->
<script src="mdh/plugins/rating/jquery.rating-stars.js"></script>



</body>


