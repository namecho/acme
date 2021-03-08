<?php if (!defined('ROOT_PATH')) exit;
class Router
{
    /** 全路径 */
    private static $pathInfo = null;
    /** 解析路由 */
    private static $route = [];

    /** 解析路径 */
    public static function match()
    {
        self::$route = explode('/', self::getPathInfo());
        array_shift(self::$route);
    }

    /** 路由分发 */
    public static function dispatch()
    {

        self::match();
        $consrollerName = ucfirst(strtolower(self::$route[0]));
        $consrollerPath = ROOT_PATH . 'includes/controllers/' . $consrollerName . '.php';
        if (file_exists($consrollerPath)) {
            include $consrollerPath;
            (new $consrollerName())->index(array_splice(self::$route, 1));
        } else {
            include ROOT_PATH . 'includes/controllers/Home.php';
            (new Home())->index(self::$route);
        }
    }

    /**
     * 设置全路径
     *
     * @param string $pathInfo
     */
    public static function setPathInfo($pathInfo = '/')
    {
        if (isset($_SERVER['PATH_INFO'])) {
            $pathInfo = $_SERVER['PATH_INFO'];
        }
        self::$pathInfo = $pathInfo;
    }

    /** 获取全路径 */
    public static function getPathInfo()
    {
        if (self::$pathInfo === null) {
            self::setPathInfo();
        }

        return self::$pathInfo;
    }
}
