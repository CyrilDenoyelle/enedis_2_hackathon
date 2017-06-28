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
        <ul class="col-md-3">
            <li><h3><a href="/particulier" class="title-prefooter-lvl1">Particulier</a></h3></li>

            <li><a href="/contactus">Nous contacter</a></li>
            <li><a href="/faq">F.A.Q.</a></li>
            <li><a href="/cgu">C.G.U.</a></li>

        </ul>
        <ul class="col-md-3">
            <li><h3><a href="/entreprise-et-professionnel" class="title-prefooter-lvl1">Entreprise et Professionnel</a></h3>
            <li><a href="/demarches-0">Démarches</a></li>
            <li><a href="/relations-avec-erdf">Relations avec Enedis</a></li>
            <li><a href="/services-0">Services gratuits</a></li>
            <li><a href="/vigilance-entreprise-et-professionnel">Vigilance</a></li>
            <li><a href="/relations-avec-votre-fournisseur-delectricite">Relations avec fournisseur</a></li>
            <li><a href="/donnees-du-reseau-0">Données du réseau</a></li>
        </ul>
        <ul class="col-md-3">

            <li><h3><a href="/collectivite-locale%20" class="title-prefooter-lvl1">Collectivité locale</a></h3>
           <li><a href="/raccorder-un-batiment">Raccorder un bâtiment</a></li>
           <li><a href="/relations-avec-erdf-0">Relations avec Enedis</a></li>
           <li><a href="/lexpertise-erdf">L'expertise Enedis</a></li>
           <li><a href="/reduire-les-risques-electriques-0">Risques électriques</a></li>
           <li><a href="/relations-avec-le-fournisseur-delectricite">Relations avec fournisseur</a></li>
           <li><a href="/demarches-2">Démarches</a></li>
        </ul>
        <ul class="col-md-3">
            <li><h3><a href="/professionnel-du-batiment" class="title-prefooter-lvl1">Professionnel du bâtiment</a></h3></li>

            <li><a href="/raccorder-un-batiment-neuf">Raccorder un bâtiment neuf</a></li>
            <li><a href="/raccorder-un-logement-collectif">Raccorder un logement collectif</a></li>
            <li><a href="/alimenter-un-batiment-existant">Alimenter un bâtiment existant</a></li>
            <li><a href="/reduire-les-risques-electriques">Réduire les risques électriques</a></li>
        </ul>
        <ul class="col-md-3">
            <!-- <li><h3><a href="/acteurs-du-marche" class="title-prefooter-lvl1">Acteur du marché</a></h3></li>
            <li><a href="/marche-de-lelectricite">Marché de l'électricité</a></li>
            <li><a href="/fournisseurs-delectricite">Fournisseurs d'électricité</a></li>
            <li><a href="/producteurs-delectricite">Producteurs d'électricité</a></li>
            <li><a href="/acteurs-du-systeme-electrique">Acteurs système électrique</a></li>
            <li><a href="/fournisseurs-derdf">Fournisseurs d'Enedis</a></li>
            <li><a href="/donnees-du-reseau-2">Données du réseau</a></li> -->
        </ul>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
