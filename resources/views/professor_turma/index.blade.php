<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>professor_turma</title>
</head>
<body>
    <h1>professor_turma</h1>
    <a href="{{route('professor_turma.create')}}">INSERIR PROFESSOR_TURMA</a>
    <table>
        <tr>
            <td>ID_professor</td>
            <td>ID_turma</td>
        </tr>
        @foreach ($professor_turma as $c)
        <tr>
            
            <td>{{$c->id_professor}}</td>
            <td>{{$c->id_turma}}</td>
            <td><a href="{{ route('professor_turma.edit',$c->id)}}">Alterar</a></td>
            <td><a href="/professor_turma/delete/{{$c->id}}">Excluir</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>