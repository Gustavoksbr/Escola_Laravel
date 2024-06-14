<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Professor_turma</title>
</head>
<body>
    <h1>Formulário de Inserção de Professor_turma</h1>
    <form action="{{ route('professor_turma.store')}}" method="POST">
        @CSRF
        <label for="id_professor">Informe o id_professor do Professor_turma</label>
        <select name="id_professor" id="id_professor">
        @foreach ($professor as $c)
            <option value ={{$c->id}}>{{$c->id}}</option>
            @endforeach
            </select><br>

        <label for="id_turma">Informe o id_turma do Professor_turma</label>
        <select name="id_turma" id="id_turma">
            @foreach ($turma as $d)
            <option value ={{$d->id}}>{{$d->id}}</option>
            @endforeach
        </select>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>