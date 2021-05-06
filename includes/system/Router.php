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
        print_r(self::$route);
        $consrollerName = ucfirst(strtolower(isset(self::$route[0]) ? self::$route[0] : 'home'));
        $consrollerPath = ROOT_PATH . 'includes/controllers/' . $consrollerName . '.php';
        $methodName = isset(self::$route[1]) ? self::$route[1] : 'index';
        if (file_exists($consrollerPath)) {
            include $consrollerPath;
            (new $consrollerName())->$methodName(array_splice(self::$route, 2));
        } else {
            include ROOT_PATH . 'includes/controllers/No.php';
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
