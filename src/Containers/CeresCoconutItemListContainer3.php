<?php

namespace TestAreaCoconut\Containers;

use Plenty\Plugin\Templates\Twig;

class TestAreaCoconutItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('TestAreaCoconut::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
