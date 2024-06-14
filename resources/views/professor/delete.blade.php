<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de Professores</title>
</head>
<body>
    <h1>Formulário de Exclusão de Professores</h1>
    <form action="{{ route('professor.update',$professor->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="nome">Nome do Professor</label>
        <input type="text" name="nome" id="nome" value="{{$professor->nome}}" disabled><br>
        <label for="materia">Materia do Professor</label>
        <input type="text" name="materia" id="materia" value="{{$professor->materia}}" disabled><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>