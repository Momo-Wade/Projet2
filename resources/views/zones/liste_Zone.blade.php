<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Zones</title>
</head>
<body>

  
  <div class="container text-center">
    <div class="row">
      <div class="col">
          <h2>Listes des zones</h2>
      <a href="create-zone" class="btn btn-primary">Nouvelle zone</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">libelle</th>
            <th scope="col">Ajouter</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($nos_zones as $zone)
           
          <tr>
            <th scope="row">{{$zone-> id}}</th>
            <td colspan="">{{$zone-> libelle}}</td>
            <td><a href="#" class="btn btn-success">Ajouter</a></td>
            <td><a href="#" class="btn btn-primary">Modifier</a></td>
            <td><a href="#" class="btn btn-danger">Supprimer</a></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
        </div>
      </div>
    </div>
    

    

</body>
</html>