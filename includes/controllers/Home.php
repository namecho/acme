<?php if (!defined('ROOT_PATH')) exit;
class Home extends Controller
{
    public function index($param)
    {
        print_r($param);
        include ROOT_PATH . 'content/themes/default/index.php';
    }
    public function say()
    {
        return 'hello';
    }
}
