<?php if (!defined('ROOT_PATH')) exit;
class HelloWorld
{
    public function __construct()
    {
        pluginManager::register('admin_navbar_console', $this, 'link');
    }

    public function link()
    {
        include __DIR__ . '/templates/list.php';
    }
}
