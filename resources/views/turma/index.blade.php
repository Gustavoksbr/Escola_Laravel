<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turmas</title>
</head>
<body>
    <h1>Turmas</h1>
    <a href="{{route('turma.create')}}">INSERIR TURMA</a>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Turno</td>
        </tr>
        @foreach ($turma as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nome}}</td>
            <td>{{$c->turno}}</td>
            <td><a href="{{ route('turma.edit',$c->id)}}">Alterar</a></td>
            <td><a href="/turma/delete/{{$c->id}}">Excluir</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>