<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Professores</title>
</head>
<body>
    <h1>Formulário de Inserção de Professores</h1>
    <form action="{{ route('professor.store')}}" method="POST">
        @CSRF
        <label for="nome">Informe o nome do Professor</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="materia">Informe o materia do Professor</label>
        <input type="text" name="materia" id="materia"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>