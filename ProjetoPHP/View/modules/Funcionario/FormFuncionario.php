<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <link rel="stylesheet" href="/../../css/FormCSS.css">
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/Funcionario/save" method="post">
    <br> <br> <br>

    <div class="box">
            <fieldset>
                <legend>Cadastro de Funcionario</legend>

                <input type="hidden" value="<?= $model->id ?>" name="id" />

                <label for="nome">Nome:</label>
                <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

                <label for="cargo">Cargo:</label>
                <input id="cargo" name="cargo" value="<?= $model->cargo ?>" type="text" />

                <button type="submit">Enviar</button>

            </fieldset>
    </div>
    </form>    
</body>
</html>