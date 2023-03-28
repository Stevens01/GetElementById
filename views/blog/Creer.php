
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/enregistrer" method="post">
  <div class="form-group">
    <label>Titre de l'article</label>
    <input type="text" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom article" name="titre">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date de création</label><br>
    <input type="date" name="createAt" class="form-control" id="exampleInputPassword1" placeholder="Date de création de l'article" name="ladate">
  </div>

  <div class="form-group">
    <label for="">Image</label><br>
    <input type="file" value="" class="form-control" id="" placeholder="Image article" name="image">
  </div>

  
  <label for="">Contenue</label>
  <input type="text" value="" name="contenu" id="" class="form-control" >
  <br>
  
  </select>
  <button type="submit" class="btn btn-primary" name="btnS">Ajouter</button>
  <button type="reset" class="btn btn-warning">Annuler</button>
</form>


</body>
</html>