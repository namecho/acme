<?php if (!defined('ROOT_PATH')) exit;
class Controller
{
    /** 主题类 */
    public $theme;

    public function __construct()
    {
        $this->theme = WidgetManager::widget('Theme');
    }

    /**
     * 输出样式
     *
     * @param string $fileName 文件名
     */
    public function stylesheet($fileName)
    {
        echo "<link rel='stylesheet' href='/content/themes/{$this->theme->themeName}/{$fileName}'>";
    }

    /**
     * 输出 js 脚本
     *
     * @param string $fileName 文件名
     */
    public function script($fileName)
    {
        echo "<script src='/content/themes/{$this->theme->themeName}/{$fileName}'></script>";
    }

    /**
     * 获取主题文件
     *
     * @param string $fileName 文件名
     */
    public function need($fileName)
    {
        require $this->theme->themeDir . $fileName;
    }

    public function __call($name, $arguments)
    {
        $themeObject = WidgetManager::widget('Theme');
        if (method_exists($themeObject, $name)) {
            $themeObject->$name(...$arguments);
        } else {
            exit("<br><b>Fatal error</b>: {$name} undefined<br>");
        }
    }
}
