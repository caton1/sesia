<?php
/**
 * Created by PhpStorm.
 * User: php7
 * Date: 31.01.19
 * Time: 21:37
 */

namespace Bookshelf;


use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
            'factories' => [
                    Controller\BookshelfController::class => InvokableFactory::class,
            ],
    ],

    'view_manager' => [
            'template_path_stack' => [
                    'bookshelf' => __DIR__.'/../view',
            ],
    ],

];