<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>

<body>
    <h1>Alunos</h1>
    @if ($message = Session::get('success'))
        <div>
            {{ $message }}
        </div>
    @endif
    <a href="{{route('aluno.create')}}">INSERIR ALUNO</a>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Turma</td>
        </tr>
        @foreach ($aluno as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->nome}}</td>
                <td>{{$c->turma}}</td>
                <td><a href="{{ route('aluno.edit', $c->id)}}">Alterar</a></td>
                <td><a href="/aluno/delete/{{$c->id}}">Excluir</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>