<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria de Produto</title>
    <link rel="stylesheet" href="/../../css/FormCSS.css">
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/Categoria_Produto/save" method="post">

    <br> <br> <br>

    <div class="box">
                <fieldset>
                    <legend>Categoria de Produto</legend>

                    <input type="hidden" value="<?= $model->id ?>" name="id" />
                    <label for="descricao">Descrição:</label>
                    <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" />
                
                <button type="submit">Enviar</button>

                </fieldset>
    </div>
    </form>    
</body>
</html>