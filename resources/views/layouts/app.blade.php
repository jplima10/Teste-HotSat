<!doctype html-5>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drogaria Venda Mais</title>
    <link rel="shortcut icon" href="logo.drogaria.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <img src="logo.drogaria.png" width="35px">
        <a class="navbar-brand" href="/">Drogaria Venda Mais</a>
        {{-- <i class="fa-solid fa-capsules" style="color: #fa0000;"></i> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('produtos.index') }}">Medicamentos</a>
            </li>       
        </ul>
        </div>
    </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>