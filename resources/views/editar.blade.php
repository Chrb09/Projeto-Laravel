<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link " href="#">Cadastrar</a>
                    <a class="nav-link active  " aria-current="page" href="#">Consultar</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <br>
        <h1>Cadastrar agendamentos de possiveis clientes</h1>
        <h2>Sistema utilizado para agendamento de serviços</h2>
        <br>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="Nome" value="{{ $pessoa->nome}}" id="nome" placeholder="">
        </div>
        <div class="mb-3">
            <label for="Telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="Telefone" value="{{ $pessoa->telefone}}" id=" Telefone"
                placeholder="">
        </div>
        <div class="mb-3">
            <label for="Origem" class="form-label">Origem</label>
            <select class="form-select" name="Origem" id="Origem">
                <option value="{{ $pessoa->origem}}" selected>{{ $pessoa->origem}}</option>
                <option value="Telefone">Telefone</option>
                <option value="Whatsapp">Whatsapp</option>
                <option value="Celular">Celular</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Data" class="form-label">Data de contato</label>
            <input type="date" class="form-control " value="{{ $pessoa->data}}" name="Data" id="Data" placeholder="">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" name="Observacao" value="{{ $pessoa->observacao}}" id="observacao"
                rows="3"></textarea>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>