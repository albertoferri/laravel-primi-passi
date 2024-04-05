<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row my-5">
            <h1 class="text-danger text-center mb-3">LARAVEL</h1>
            <nav class="navbar bg-danger navbar-expand-lg navbar-dark text-uppercase fw-bold mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pagina1') }}">Pagina 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pagina2') }}">Pagina 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pagina3') }}">Pagina 3</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>