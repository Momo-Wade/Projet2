<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Projets</title>
</head>
<body>

    <div class="container text-center">
      <div class="row">
        <div class="col">
            <h2>Listes des projets</h2>
            <br>
        <a href="{{url('/create-projet')}}" class="btn btn-primary">Nouveau Projet</a>
        <br>

        @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
        @endif


    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">code</th>
            <th scope="col">nom</th>
            <th scope="col">description</th>
            <th scope="col">budget</th>
            <th scope="col">date_debut</th>
            <th scope="col">date_fin</th>
            <th scope="col">statut</th>
            <th scope="col">actions</th>
            
          </tr>
        </thead>
        <tbody>
            @php
              $ide = 1;   
            @endphp

            @foreach ($nos_projets as $projet)
           
          <tr>
            <th scope="row">{{$ide}}</th>
            <td colspan="">{{$projet-> code}}</td>
            <td>{{$projet-> nom}}</td>
            <td>{{$projet-> description}}</td>
            <td>{{$projet-> budget}}</td>
            <td>{{$projet-> date_debut}}</td>
            <td>{{$projet-> date_fin}}</td>
            <td>{{$projet-> statut}}</td>
            <td>
              <a href="/update_projet/{{ $projet-> id }}" class="btn btn-success">Modifier</a>
              <a href="/delete_projet/{{ $projet-> id }}" class="btn btn-danger">Supprimer</a>
            </td>
            
          </tr>
          @php
          $ide += 1;
          @endphp
          @endforeach
          
        </tbody>
      </table>
        </div>
      </div>
    </div>
    

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>