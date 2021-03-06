<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['login']);
      $mypassword = mysqli_real_escape_string($db,$_POST['mdp']);

      $sql = "SELECT id_auteur FROM utilisateur WHERE login = '$myusername' and mdp = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login'] = $myusername;
         $_SESSION['prenom']= $myprenom;

         header("location: Accueil.php");
      }else {
        $error=1;
        header("location: connexion2.php");
      }
   }
?>

<html lang="fr">
<head>
  <title>The workflow media</title>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set black background color, white text and some padding */
    footer {
      background-color: #505050;
      color: white;
      padding: 15px;
    }
    section {
      border: 3px rgb(0, 0, 0) solid;
      border-radius: 5px;
      padding-left: 170px;
      padding-top: 10px;
      /*background-color: rgb(229, 159, 101);*/
    }
  </style>
</head>
<body>
<div class="col-sm-12">
  <div class="panel panel-primary text-center">
    <div class="panel-heading">
      <img src="Icones/logo.png" height="150" width="400" alt="The Workflow Media"> <h1> Bienvenue dans The Workflow Media </h1>
    </div>
    <div class="panel-body">
      <section>

          <div class="row">
            <div class="col-lg-5">
              <div class="panel panel-primary text-center">
                <div class="panel-heading">
                  Se connecter
                </div>
                <div class="panel-body text-center">
                <div class="row">
                  <div class="container">
                <div class="col-lg-4">
                  <form action="" method="post">
                  <form>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="e-mail" name="login">
                    </div>
                    <div class="form-group">
                      <label for="mdp">Mot de passe:</label>
                      <input type="password" class="form-control" id="mdp" placeholder="mot de passe" name="mdp">
                    </div>
                  </br>
                  <p class="accueil_boutons">
                    <button type="submit" class="btn btn-default">Connexion</button> </p>
                  </form>
                  </form>
                </div>
              </div>
            </div>
          </div>
</div>
</diV>

            <div class="col-lg-5">
              <div class="panel panel-primary text-center">
                <div class="panel-heading">
                  Inscription
                </div>
                <div class="panel-body text-center">

                  <form>
                    <div class="form-group">
                      <label for="prenom">Prenom:</label>
                      <input type="prenom" class="form-control" id="prenom" placeholder="prenom">
                    </div>
                    <div class="form-group">
                      <label for="nom">Nom:</label>
                      <input type="nom" class="form-control" id="nom" placeholder="nom">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="e-mail">
                    </div>
                    <div class="form-group">
                      <label for="mdp">Mot de passe:</label>
                      <input type="password" class="form-control" id="mdp" placeholder="mot de passe">
                    </div>
                  </br>
                  <p class="accueil_boutons">
                    <button type="submit" class="btn btn-default">Inscription</button> </p>
                  </form>
                </div>

            </div>
        </div>
  </div>

        </section>
  </div>

</div>
</div>


  </body>
  <footer class="container-fluid text-center">
    <p>The Workflow Media © 2018 | Tous droits réservés</p>
  </footer>
</html>
