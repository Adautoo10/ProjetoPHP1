<?php

namespace ProjetoPHP\Controller;


use ProjetoPHP\Model\CadastroLoginModel;

class CadastroLoginController extends Controller
{
    public static function form()
    {
        $model = new CadastroLoginModel();
    
            if(isset($_GET['id']))
                $model = $model->getById( (int) $_GET['id']);

        parent::render('Cadastro/CadastroForm', $model);
    }

   /* public static function auth()
    {
        $model = new CadastroModel();

        $model->email = $_POST['nome'];
        $model->senha = $_POST['email'];
        $model->senha = $_POST['senha'];

        $usuario_logado = $model->autenticar();

        if ($usuario_logado !== null) {

            $_SESSION['usuario_logado'] = $usuario_logado;

            header("Location: /");

        } else
            header("Location: /login?erro=true");
    }
*/
public static function save()
{
    $cadastro = new CadastroLoginModel();

    $cadastro->id = $_POST['id'];
    $cadastro->nome = $_POST['nome'];
    $cadastro->email = $_POST['email'];
    $cadastro->senha = $_POST['senha'];
    $cadastro->save();

    header("Location: /login");
}

public static function update()
{
    $model = new CadastroLoginModel();

    parent::render('Cadastro/FormSenha', $model);
}

}
