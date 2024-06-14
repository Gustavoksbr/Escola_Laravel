<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Alunos</title>
</head>
<body>
    <h1>Formulário de Inserção de Alunos</h1>
    <form action="{{ route('aluno.store')}}" method="POST">
        @CSRF
        <label for="nome">Informe o nome do Aluno</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="turma">Informe a turma do Aluno</label>
        <select name="turma" id="turma">
            @foreach ($turma as $c)
            <option value ={{$c->id}}>{{$c->id}}</option>
            @endforeach
        </select>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>