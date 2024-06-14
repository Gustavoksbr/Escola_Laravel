<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de Turmas</title>
</head>
<body>
    <h1>Formulário de Exclusão de Turmas</h1>
    <form action="{{ route('turma.update',$turma->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="nome">Nome do Turma</label>
        <input type="text" name="nome" id="nome" value="{{$turma->nome}}" disabled><br>
        <label for="turno">Turno do Turma</label>
        <input type="text" name="turno" id="turno" value="{{$turma->turno}}" disabled><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>