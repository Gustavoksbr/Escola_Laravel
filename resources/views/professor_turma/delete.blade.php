<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de professor_turma</title>
</head>
<body>
    <h1>Formulário de Exclusão de professor_turma</h1>
    <form action="{{ route('professor_turma.update',$professor_turma->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="id_professor">ID_professor</label>
        <input type="text" name="id_professor" id="id_professor" value="{{$professor_turma->id_professor}}" disabled><br>
        <label for="id_turma">ID_turma</label>
        <input type="text" name="id_turma" id="id_turma" value="{{$professor_turma->id_turma}}" disabled><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>