<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class Md5ConverterTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'MD5 Converter';
    }

    public function getFilters()
    {
        return array(
            'toMd5' => new Twig_Filter_Method($this, 'toMd5'),
        );
    }

    public function toMd5($string, $returnAsArray = false)
    {
        return md5($string);
    }
}