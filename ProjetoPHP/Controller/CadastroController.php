<?php

namespace ProjetoPHP\Controller;


use ProjetoPHP\Model\CadastroModel;

class CadastroController extends Controller
{
    public static function index()
    {
        parent::render('Cadastro/CadastroForm');
    }

    public static function auth()
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

    public static function logout()
    {
        unset($_SESSION['usuario_logado']);

        parent::isAuthenticated();
    }
}
