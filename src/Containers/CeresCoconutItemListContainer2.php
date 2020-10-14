<?php

namespace TestAreaCoconut\Containers;

use Plenty\Plugin\Templates\Twig;

class TestAreaCoconutItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('TestAreaCoconut::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}
