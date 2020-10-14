<?php

namespace TestAreaCoconut\Containers;

use Plenty\Plugin\Templates\Twig;

class TestAreaCoconutContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('TestAreaCoconut::Stylesheet');
    }
}
