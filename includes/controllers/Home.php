<?php if (!defined('ROOT_PATH')) exit;
class Home extends Controller
{
    public function index($params)
    {
        $this->need((!empty($params[0]) ? $params[0] : 'index') . '.php');
    }
}
