<?php if (!defined('ROOT_PATH')) exit;
class PluginManager
{
    private static $listeners = [];

    public static function init()
    {
        $plugins = [
            [
                "directory" => "hello_world",
                "enabled" => true
            ]
        ];
        /** 初始化插件 */
        foreach ($plugins as $plugin) {
            /** 插件未启用，跳过初始化 */
            if (!$plugin['enabled']) {
                continue;
            }
            $sections = explode('_', $plugin['directory']);
            array_walk($sections, function (&$v) {
                $v = ucfirst($v);
            });
            $class = implode('', $sections);
            $pluginPath = PLUGIN_PATH . $plugin['directory'] . '/' . $class . '.php';
            if (file_exists($pluginPath)) {
                include_once $pluginPath;
                if (class_exists($class)) {
                    new $class();
                }
            }
        }
    }

    /**
     * 注册监听插件方法
     *
     * @param string $hook 勾子名称
     * @param object $reference 当前类应用
     * @param string $method 插件方法名称
     */
    public static function register($hook, &$reference, $method)
    {
        $key = get_class($reference) . '->' . $method;
        self::$listeners[$hook][$key] = [&$reference, $method];
    }

    /**
     * 触发勾子
     *
     * @param string $hook 钩子名称
     * @param mixed $data 钩子参数
     */
    public static function trigger($hook, $data = '')
    {
        // print_r(self::$listeners);
        if (isset(self::$listeners[$hook])) {
            foreach (self::$listeners[$hook] as $listener) {
                $class = &$listener[0];
                $method = $listener[1];
                if (method_exists($class, $method)) {
                    $class->$method($data);
                }
            }
        }
    }
}
