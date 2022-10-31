<?php

use ProjetoPHP\Controller\PessoaController;
use ProjetoPHP\Controller\ProdutoController;
use ProjetoPHP\Controller\Categoria_ProdutoController;
use ProjetoPHP\Controller\FuncionarioController;
use ProjetoPHP\Controller\LoginController;
use ProjetoPHP\Controller\CadastroController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($uri_parse)
{
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

//Cadastro
case '/cadastro':
    CadastroController::index();
break;

case '/cadastro/auth':
    CadastroController::auth();
break;

case '/cadastro':
    CadastroController::logout();
break;
 
 //Pessoa
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
          PessoaController::delete();
    break;
    

    
    //Produto
    case '/produto':
        ProdutoController::index();
    break;
    
    case '/produto/form':
        ProdutoController::form();
        break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
          ProdutoController::delete();
    break;
    
    

     //Categoria
    case '/Categoria_Produto':
        Categoria_ProdutoController::index();
    break;
    
    case '/Categoria_Produto/form':
        Categoria_ProdutoController::form();
        break;

    case '/Categoria_Produto/save':
        Categoria_ProdutoController::save();
    break;

    case '/Categoria_Produto/delete':
        Categoria_ProdutoController::delete();
  break;

  
  //Funcionario
  case '/Funcionario':
    FuncionarioController::index();
break;

case '/Funcionario/form':
    FuncionarioController::form();
break;

case '/Funcionario/save':
    FuncionarioController::save();
break;

case '/Funcionario/delete':
    FuncionarioController::delete();
break;
  

    default:
        echo "erro 404";
    break;
}