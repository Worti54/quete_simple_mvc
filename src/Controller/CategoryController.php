<?php

namespace Controller;

use Model\CategoryManager;
use View\View;

use Twig_Loader_Filesystem;
use Twig_Environment;


class CategoryController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }
    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAllCategories();
        //require __DIR__ . '/../View/category.html.twig';
        return $this->twig->render('category.html.twig', ['categories' => $categories]);

    }
    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        //require __DIR__ . '/../View/showCategory.html.twig';
        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }

}