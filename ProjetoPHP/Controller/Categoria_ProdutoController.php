<?php

namespace ProjetoPHP\Controller;

use ProjetoPHP\Model\Categoria_ProdutoModel;

class Categoria_ProdutoController extends Controller
{

    /**
     * Os métodos index serão usados para devolver uma View.
     */
    public static function index()
    {
        $model = new Categoria_ProdutoModel();
        $model->getAllRows();

        include 'View/modules/Categoria_Produto/Categoria_ProdutoListar.php';
    }


   /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form()
    {
        $model = new Categoria_ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);


        include 'View/modules/Categoria_Produto/FormCategoria_Produto.php';
    }

    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save()
    {
        // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
        // pelo usuário no formulário (note o envio via POST)
        $categoria_produto = new Categoria_ProdutoModel();

        $categoria_produto->id = $_POST['id'];
        $categoria_produto->descricao = $_POST['descricao'];

        $categoria_produto->save(); // chamando o método save da model.

        header("Location: /Categoria_Produto"); 
    }

    public static function delete()
    {
        $model = new Categoria_ProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /Categoria_Produto");
    }
}