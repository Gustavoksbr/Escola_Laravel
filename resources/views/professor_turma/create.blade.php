<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Professor_turma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Formulário de Inserção de Professor_turma</h1>
        <form action="{{ route('professor_turma.store')}}" method="POST">
            @CSRF
            <div class="row">
                <div class="col-6">
                    <label for="id_professor" class="form-label"> Informe o id_professor do Professor_turma</label>
                    <select name="id_professor" id="id_professor"class="form-select">
                        @foreach ($professor as $c)
                            <option value={{$c->id}}>{{$c->id}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="id_turma" class="form-label">Informe o id_turma do Professor_turma</label>
                    <select name="id_turma" id="id_turma" class="form-select">
                        @foreach ($turma as $d)
                            <option value={{$d->id}}>{{$d->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit"class="btn btn-primary">Salvar</button>
            <a href="{{route('professor_turma.index')}}"  class="btn btn-secondary">
                Voltar
            </a>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>