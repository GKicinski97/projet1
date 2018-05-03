<!DOCTYPE html>
<?php

   include('session.php');
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set black background color, white text and some padding */
    footer {
      background-color: #505050;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" ><img src="Icones/logo2.png" width="125" height="50" align="middle" alt="Accueil"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <form class="navbar-form navbar-left" role="search"></br>
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Rechercher...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      <ul class="nav navbar-nav" >
        <li><a href="Accueil.php"><img src="Icones/accueil.ico" alt="Accueil"> Accueil </a></li>
        <li><a href="Profil.html"><img src="Icones/profil.ico" alt="Mon Profil"> Mon Profil </a></li>
        <li class="active"><a href="#"><img src="Icones/reseau.ico" alt="Mon Réseau"> Mon Réseau </a></li>
        <li><a href="Notification.html"><img src="Icones/notification.ico" alt="Notifications"> Notifications </a></li>
        <li><a href="#"><img src="Icones/emploi.ico" alt="Emplois"> Emplois </a></li>
        <li><a href="#"><img src="Icones/message.ico" alt="Messages"> Messages </a></li>
        <li><a href="logout.php"><img src="Icones/deco.ico" alt="Se déconnecter"> Se déconnecter </a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col-sm-3 well">
      <div class="panel panel-primary text-center">
        <div class="panel-heading"> Mes invitations </div>
          <div class="panel-body" style="max-height: 10;">

 Afficher invitations ici

      </div>
      </div>
    </div>

    <div class="col-sm-7 well">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-primary text-center">
            <div class="panel-heading">Mon réseau</div>

              <div class="panel-body">
                <div class="row">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>John</p>
                       <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>Bo</p>
                       <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>Jane</p>
                       <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="well">
                       <p>Anja</p>
                       <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="well">
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
</div>


<footer class="container-fluid text-center">
  <p>The Workflow Media © 2018 | Tous droits réservés</p>
</footer>

</body>
</html>
