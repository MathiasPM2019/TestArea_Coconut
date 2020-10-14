<?php

namespace TestAreaCoconut\Containers;

use Plenty\Plugin\Templates\Twig;

class TestAreaCoconutItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('TestAreaCoconut::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}
