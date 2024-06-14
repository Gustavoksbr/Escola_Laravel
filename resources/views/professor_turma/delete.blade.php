<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de professor_turma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>Formulário de Exclusão de professor_turma</h1>
    <form action="{{ route('professor_turma.update',$professor_turma->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
        <div class="col-6">
        <label for="id_professor" class="form-label">ID_professor</label>
        <input type="text" name="id_professor" id="id_professor" value="{{$professor_turma->id_professor}}" class="form-control" disabled><br>
        </div>
            <div class="col-6">
        <label for="id_turma" class="form-label">ID_turma</label>
        <input type="text" name="id_turma" id="id_turma" value="{{$professor_turma->id_turma}}" class="form-control" disabled><br>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('professor.index')}}" class="btn btn-secondary">
                Voltar
            </a>
    </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>