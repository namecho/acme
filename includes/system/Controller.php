<?php if (!defined('ROOT_PATH')) exit;
class Controller
{
    /** 主题类 */
    public $theme;

    public function __construct()
    {
        $this->theme = WidgetManager::widget('Theme');
        $this->need('functions.php');
    }

    /**
     * 输出样式
     *
     * @param string $fileName 文件名
     */
    public function stylesheet($fileName)
    {
        echo "<link rel='stylesheet' href='/content/themes/{$this->theme->themeName}/{$fileName}'>\n";
    }

    /**
     * 输出 js 脚本
     *
     * @param string $fileName 文件名
     */
    public function script($fileName)
    {
        echo "<script src='/content/themes/{$this->theme->themeName}/{$fileName}'></script>\n";
    }

    /**
     * 导入主题文件
     *
     * @param string $fileName 文件名
     */
    public function need($fileName)
    {
        $filePath = $this->theme->themeDir . $fileName;
        if (file_exists($filePath)) {
            include $filePath;
        }
    }

    /**
     * 获取站点 url
     *
     * @param string $fileName 文件名
     */
    public function url($path = '')
    {
        $path = trim($path, '/');
        echo HOME_ENTRY . "/{$path}";
    }

    public function __call($name, $arguments)
    {
        $themeObject = WidgetManager::widget('Theme');
        if (method_exists($themeObject, $name)) {
            $themeObject->$name($arguments);
        } else {
            exit("<br><b>Fatal error</b>: {$name} undefined<br>");
        }
    }
}
