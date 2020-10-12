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
                ['is_safe' => ['html']]
            ),
        ];
    }

    public function getCopyright(int $date=null)
    {
        $cur_year = date("Y");

        $output = "&copy; ";
        $output.= null != $date && $date < $cur_year ? $date." - " : null;
        $output.= $cur_year;
        $output.= " Site.com";

        return $output;
    }

}
