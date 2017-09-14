<?php
// Filename: /module/Blog/Module.php
namespace Blog;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return array();
    }
}