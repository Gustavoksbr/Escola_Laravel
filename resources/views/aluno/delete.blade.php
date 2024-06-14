<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de Alunos</title>
</head>
<body>
    <h1>Formulário de Exclusão de Alunos</h1>
    <form action="{{ route('aluno.update',$aluno->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="nome">Nome do Aluno</label>
        <input type="text" name="nome" id="nome" value="{{$aluno->nome}}" disabled><br>
        <label for="turma">Turma do Aluno</label>
        <input type="text" name="turma" id="turma" value="{{$aluno->turma}}" disabled><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>