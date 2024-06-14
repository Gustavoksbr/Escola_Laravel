<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>professor_turma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>professor_turma</h1>
    <a href="{{route('professor_turma.create')}}" class="btn btn-primary">Novo Professor_turma</a>
    <a href="/" class="btn btn-secondary">Voltar</a>
    <table class="table table-stripped table-hover">
        <tr>
            <td>ID_professor</td>
            <td>ID_turma</td>
        </tr>
        @foreach ($professor_turma as $c)
        <tr>
            
            <td>{{$c->id_professor}}</td>
            <td>{{$c->id_turma}}</td>
            <td><a href="{{ route('professor_turma.edit',$c->id)}}"class="btn btn-warning">Alterar</a></td>
            <td><a href="/turma/delete/{{$c->id}}" class="btn btn-danger">Excluir</a></td>
        </tr>
        @endforeach
    </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>