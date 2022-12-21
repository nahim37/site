<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscription.css">
    <title>sunfinance</title>
    <!-- liens Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- lien de polices -->
</head>

<body>
    <!-- nav bar start -->
    <div class="container">
        <div class="main">
            <div class="artiste">
                <img id="image"  width="100px;"  height= "75px" src="image/logo.jpg" alt="image">
                
            </div>
           <div>
            <nav class="nav" >
                <ul class="list">
                    <li><a  href="connexion.html">Se connecter</a></li>
                </ul>
            </nav>
           </div>  
         </div>
        <!-- nav bar end -->

        <div class="section-header">
            <h2>Faite votre inscription</h2>
          </div>
        <!-- general -->
        <div class="general">
            <form action="traitement.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label"> Nom </label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                    <br>
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="prenom" name="surname" aria-describedby="prenomHelp">
                    <br>
                    <label for="exampleInputEmail1" class="form-label"> Address Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="exemple2@gmail.com">
                    <br>
                    <label for="bith" class="form-label">Date de Naissance</label>
                    <input type="number" class="form-control" id="bith" name="dt" aria-describedby="bithlHelp" placeholder="format ../../..">
                    <br>
                    <!-- <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre email avec quelqu'un d'autre -->
                    <label for="pass" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="pass" name="mp">
                    <br>
                    <label for="formFileLg" class="form-label">choisissez votre carte d'identité:recto </label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                    <br>
                    <label for="formFileLg" class="form-label">choisissez votre carte d'identité:verso </label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file"><br>
                    <button type="submit" class="btn btn-primary" name="envoyez">Soumettre</button>
            </div>
            <br><br><br>
            </form>
        </div>
       
        
    </div>
  



</body>

</html>