<?php
namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class CopyrightExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction(
                'copyright', // Nom de la fonction Twig
                [$this, 'getCopyright'], // Methode à déclencher lors de l'appel de la fonction "copyrigth"
            ),
        ];
    }

    public function getCopyright(int $xxx)
    {
        return "Hello le copyright";
    }

}
