<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Turmas</title>
</head>
<body>
    <h1>Formulário de Inserção de Turmas</h1>
    <form action="{{ route('turma.store')}}" method="POST">
        @CSRF
        <label for="nome">Informe o nome do Turma</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="turno">Informe o turno do Turma</label>
        <input type="text" name="turno" id="turno"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>