<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modifier un medicament</title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

  <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      <form>
        <div class="row mb-3">
    <label for="nom" class="">Nom</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Description</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="description">
    </div>
  </div>
       
  
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
    </div>
  </div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>