<?php

namespace Controller;

use Model\ItemManager;
use View\View;


use Twig_Loader_Filesystem;
use Twig_Environment;

/**
 * Class ItemController
 * @package Controller
 */
class ItemController
{

    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }
    public function index()
    {
        $itemManager = new ItemManager();
        $items = $itemManager->selectAllItems();

        return $this->twig->render('item.html.twig', ['items' => $items]);
    }

    public function show(int $id)
    {
        $itemManager = new ItemManager();
        $item = $itemManager->selectOneItem($id);

        //require __DIR__ . '/../View/showItem.html.twig';
        return $this->twig->render('showItem.html.twig', ['item' => $item]);


    }

}