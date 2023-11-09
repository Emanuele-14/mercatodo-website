
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mercatodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body class="bg-light">
    <div class="container">
      <img style="width: 40%" class="d-block mx-auto my-3" src="{{ asset('images/logo-nav.jpeg') }}" />
      <div class="card p-6 p-lg-10 space-y-4">
        <h4 class="text-center mt-3">
            Richiesta di diventare revisore da:
        </h4>
        <h6 class="text-center"> Utente: {{ $user->name }}</h6>
        <h6 class="text-center"> Email: {{ $user->email }}</h6>
        <a class="btn btn-secondary btn-sm w-30 mx-auto my-3" href="{{ route('make.revisor',compact('user')) }}">Rendi Revisore</a>
      </div>
      
      <div class="text-muted text-center my-6">
        Inviato da Mercatodo <br>
        www.Mercatodo.com<br>
        
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>