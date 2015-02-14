<?php
namespace Craft;

class Md5ConverterPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('MD5 Converter');
    }

    public function getVersion()
    {
        return '0.1.0';
    }

    public function getDeveloper()
    {
        return 'John Morton';
    }

    public function getDeveloperUrl()
    {
        return 'http://supergeekery.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.md5converter.twigextensions.Md5ConverterTwigExtension');
        return new Md5ConverterTwigExtension();
    }
}