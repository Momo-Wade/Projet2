<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Activités</title>
</head>
<body>

  
  <div class="container text-center">
    <div class="row">
      <div class="col">
          <h2>Listes des activites</h2>
        <a href="create-activite" class="btn btn-primary">Nouvelle activite</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">libelle</th>
            <th scope="col">budget</th>
            <th scope="col">date</th>
            <th scope="col">rapport</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($nos_activites as $activite)
           
          <tr>
            <th scope="row">{{$activite-> id}}</th>
            <td colspan="">{{$activite-> libelle}}</td>
            <td>{{$activite-> budget}}</td>
            <td>{{$activite-> date}}</td>
            <td>{{$activite-> rapport}}</td>
            <td><a href="#" class="btn btn-success">Modifier</a></td>
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