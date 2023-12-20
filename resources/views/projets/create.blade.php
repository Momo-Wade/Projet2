<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Projets</title>
</head>
<body>

    <div class="container">
      
      <div class="row">
        <div class="col">
      
            <h2>Ajouter un projet</h2>
            <hr>

            @if (session('status'))
                <div class="alert alert-success">
                 {{ session('status') }}
                </div>
            @endif

            <ul>
              @foreach ($errors->all() as $error)
                  <li class="alert alert-danger">{{ $error }}</li>
              @endforeach

            </ul>

           
  
            <form action="/ajouter/traitement" method="POST" class="form-group">
                @csrf

              <div class="form-group">
                <label for="code" class="form-label">code</label>
                <input type="text" class="form-control" id="code" name="code">
              </div>

              <div class="form-group">
                <label for="nom" class="form-label">nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
              </div>

              <div class="form-group">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description">
              </div>

              <div class="form-group">
                <label for="budget" class="form-label">budget</label>
                <input type="number" class="form-control" id="budget" name="budget">
              </div>

              <div class="form-group">
                <label for="date_debut" class="form-label">date_debut</label>
                <input type="date" class="form-control" id="date_debut" name="date_debut">
              </div>

              <div class="form-group">
                <label for="date_fin" class="form-label">date_fin</label>
                <input type="date" class="form-control" id="date_fin" name="date_fin">
              </div>

              <div class="form-group">
                <label for="statut" class="form-label">statut</label>
                <input type="number" class="form-control" id="statut" name="statut">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Ajouter</button>
              <a type="submit" href="liste-projets" class="btn btn-warning">Retour</a>
            </form>
        </div>
      </div>
    </div>
   
    

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>