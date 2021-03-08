<?php if (!defined('ROOT_PATH')) exit;
class Theme extends WidgetManager
{
    /** 主题名称 */
    public $themeName;
    /** 主题目录 */
    public $themeDir;

    public function __construct()
    {
        /** 获取主题名称 */
        $this->themeName = 'default';
        /** 获取主题目录 */
        $this->themeDir = ROOT_PATH . 'content/themes/' . $this->themeName . '/';
    }
}
