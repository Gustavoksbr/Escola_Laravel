<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração de Turmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>Formulário de Alteração de Turmas</h1>
    <form action="{{ route('turma.update',$turma->id)}}" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
        <div class="col-6">
        <label for="nome" class="form-label">Informe o nome do Turma</label>
        <input type="text" name="nome" id="nome" value="{{$turma->nome}}" class="form-control"><br>
        </div>
        <div class="col-6">
        <label for="turno" class="form-label">Informe o turno do Turma</label>
        <input type="text" name="turno" id="turno" value="{{$turma->turno}}" class="form-control"><br>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('turma.index')}}" class="btn btn-secondary">
                Voltar
            </a>
    </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>