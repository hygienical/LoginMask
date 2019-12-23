<?php

namespace LoginMask\Containers;

use Plenty\Plugin\Templates\Twig;
    
class LoginMaskContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('LoginMask::content.LoginMaskAssets');
    }
}