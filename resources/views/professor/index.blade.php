<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores</title>
</head>
<body>
    <h1>Professores</h1>
    <a href="{{route('professor.create')}}">INSERIR PROFESSOR</a>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Materia</td>
        </tr>
        @foreach ($professor as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nome}}</td>
            <td>{{$c->materia}}</td>
            <td><a href="{{ route('professor.edit',$c->id)}}">Alterar</a></td>
            <td><a href="/professor/delete/{{$c->id}}">Excluir</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>