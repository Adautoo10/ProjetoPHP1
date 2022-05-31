<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="/../../css/FormCSS.css">
    
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/pessoa/save" method="post">

    <br> <br> <br>

        <div class="box">
            <fieldset>
                <legend>Cadastro de Pessoa</legend>

                <input type="hidden" value="<?= $model->id ?>" name="id" />

                <label for="nome">Nome:</label>
                <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

                <label for="rg">RG:</label>
                <input id="rg" name="rg" value="<?= $model->rg ?>" type="number" />

                <label for="cpf">CPF:</label>
                <input id="cpf" name="cpf" value="<?= $model->cpf ?>" type="number" />

                <label for="data_nascimento">Data Nascimento:</label>
                <input id="data_nascimento" name="data_nascimento" value="<?= $model->data_nascimento ?>" type="date" />

                <label for="email">E-mail:</label>
                <input id="email" name="email" value="<?= $model->email ?>" type="email" />

                <label for="telefone">Telefone:</label>
                <input id="telefone" name="telefone" value="<?= $model->telefone ?>" type="number" />

                <label for="endereco">Endereço:</label>
                <input id="endereco" name="endereco" value="<?= $model->endereco ?>" type="text" />

                <button type="submit">Enviar</button>

            </fieldset>
        </div>
    </form>    
</body>
</html>