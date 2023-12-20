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
      
            <h2>Modifier un projet</h2>
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

           
  
            <form action="/update/traitement" method="POST" class="form-group">
                @csrf

                <input type="text" name="id" style="display: none;" value="{{ $projets->id }}">

              <div class="form-group">
                <label for="code" class="form-label">code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ $projets->code }}">
              </div>

              <div class="form-group">
                <label for="nom" class="form-label">nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $projets->nom }}">
              </div>

              <div class="form-group">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $projets->description }}">
              </div>

              <div class="form-group">
                <label for="budget" class="form-label">budget</label>
                <input type="number" class="form-control" id="budget" name="budget" value="{{ $projets->budget }}">
              </div>

              <div class="form-group">
                <label for="date_debut" class="form-label">date_debut</label>
                <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $projets->date_debut }}">
              </div>

              <div class="form-group">
                <label for="date_fin" class="form-label">date_fin</label>
                <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $projets->date_fin }}">
              </div>

              <div class="form-group">
                <label for="statut" class="form-label">statut</label>
                <input type="number" class="form-control" id="statut" name="statut" value="{{ $projets->statut }}">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Modifier</button>
              <a type="submit" href="liste-projets" class="btn btn-warning">Retour</a>
            </form>
        </div>
      </div>
    </div>
   
    

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>