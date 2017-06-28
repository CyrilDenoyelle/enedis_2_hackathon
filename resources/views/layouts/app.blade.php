<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enedis 2 hackathon</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto" rel="stylesheet">
    <link rel="stylesheet" href='/css/style.css'>
    <link rel="stylesheet" href='/css/graph.css'>
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Ubuntu" rel="stylesheet">
    <script src="/js/graph.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="/img/logo_enedis_fixed.jpg" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                         </div>
                                         <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                         </div>
                                         <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                         </div>
                                         <div class="checkbox">
                                             <label>
                                                 <input type="checkbox"> keep me logged-in
                                             </label>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
</header>
<body>
    @yield('content')
</body>

<footer class="container">
    <div class="row">
        <ul class="col-md-6 text-center">
            <li><a href="/contactus">Qui sommes nous ?</a></li>
            <li><a href="/contactus">Nous contacter</a></li>
            <li><a href="/pds">Plan du site</a></li>


        </ul>
        <ul class="col-md-6 text-center">
            <li><a href="/ml">Mentions Légales</a></li>
            <li><a href="/faq">F.A.Q.</a></li>
            <li><a href="/cgu">C.G.U.</a></li>


        </ul>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('scriptation')

</body>
</html>
