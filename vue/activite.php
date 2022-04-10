<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GSB</title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

  <script>
           function confirmSuppr(form)
           {
           if (confirm("Supprimer avec identifiant " +
           form.codeElevAction.value))
           // suppression confirmée
           form.submit();
           }
         </script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GSB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="medicament" href="#">Médicament</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="activite" href="#">Activite</a>
          
        </li>

      </ul>
    </div>
  </div>
</nav>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Nom</th>
      <th scope="col">Date</th>
      <th scope="col">Lieu</th>
      
      <th scope="col">Modif</th>
      <th scope="col">Suprimer</th>
    </tr>
  </thead>
  

            <?php foreach ($activites as $activite): ?>
                  
                   <!-- mise en place d'un formulaire -->
                   <form method="POST"
                   action="index.php?action=MSA">
                   <!-- champ caché pour le code de medicament de la ligne -->
                   <input type="hidden" name="codeElevAction" value="<?php echo $activite['id']; ?>" />
                   <!-- affichage de la ligne courante -->

                   <tr>
                   <td><?php echo $activite["id"]; ?></td>
                   <td><?php echo $activite["nom"]; ?></td>
                   <td><?php echo $activite["Date_Activite"];?></td>
                   <td><?php echo $activite["Lieu"];?></td>
                   
                   
                  
                   <td><input type="submit" name="modif"
                   value="Modifier" /></td>
                   <td><input type="button" value="Supprimer"
                   onClick="confirmSuppr(form);" />
                  
                   </td>
                   </tr>
                   </form>

            <?php endforeach; ?>
       
</table>

<!-- lien pour ajouter un elève -->
          
<a href="index.php?action=FA">Ajouter un elève</a>
<br /><br />
<a href="index.php?action=D">Se déconnecter</a>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>