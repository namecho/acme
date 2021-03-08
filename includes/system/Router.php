<?php
class Router
{
    /** 全路径 */
    private static $pathInfo = null;
    /** 解析路由 */
    private static $route = [];

    /** 解析路径 */
    public static function match()
    {
        $uri = explode('/', self::getPathInfo());
        array_shift($uri);
        self::$route['controller'] = $uri[0] ? ucfirst(strtolower($uri[0])) : '';
        self::$route['params'] = array_splice($uri, 1);
        return self::$route;
    }

    /** 路由分发 */
    public static function dispatch()
    {
        self::match();
        $controllerPath = ROOT_PATH . 'includes/controllers/' . self::$route['controller'] . '.php';
        file_exists($controllerPath) && include $controllerPath;
        if (class_exists(self::$route['controller'])) {
            (new self::$route['controller']())->index(self::$route['params']);
        } else {
            self::noController();
        }
    }

    private static function noController()
    {
        include ROOT_PATH . 'includes/controllers/No.php';
        (new No())->index();
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
