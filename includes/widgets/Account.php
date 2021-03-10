<?php if (!defined('ROOT_PATH')) exit;
class Account extends WidgetManager
{
    public $userName;

    public function execute()
    {
        $this->getUserName();
    }

    private function getUserName()
    {
        $this->userName = '差异';
    }
}
