<?php
/**
 * Created by PhpStorm.
 * User: php7
 * Date: 31.01.19
 * Time: 21:28
 */
namespace Bookshelf;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__.'/../config/module.config.php';
    }
}