<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row my-5">
            <h1 class="text-danger text-center mb-3">LARAVEL</h1>
            <div class="col-4 offset-4">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="utente-tab" data-bs-toggle="tab" href="#utente" role="tab" aria-controls="utente" aria-selected="true">Utente</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="auto-tab" data-bs-toggle="tab" href="#auto" role="tab" aria-controls="auto" aria-selected="false">Auto</a>
                    </li>
                </ul>
                  
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-2 border border-top-0 border-1 rounded-bottom-3" id="utente" role="tabpanel" aria-labelledby="utente-tab">
                        <h2>SCHEDA UTENTE</h2>
                        <p>Nome: {{ $studente['nome'] }}</p>
                        <p>Cognome: {{ $studente['cognome'] }}</p>
                        <p>Età: {{ $studente['eta'] }}</p>
                        <p class="mb-1">Corsi:</p>
                        <ul>
                        @foreach ($studente['corsi'] as $corso)
                            <li>{{ $corso }}</li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade p-2 border border-top-0 border-1 rounded-bottom-3" id="auto" role="tabpanel" aria-labelledby="auto-tab">
                        <h2>INFORMAZIONI AUTO</h2>
                        <p>Marca: {{ $auto->marca }}</p>
                        <p>Modello: {{ $auto->modello }}</p>
                    </div>
                </div>
            </div>
              
            
        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>