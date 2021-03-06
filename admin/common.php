<?php
define('ROOT_PATH', dirname(__DIR__) . '/');
include ROOT_PATH . 'includes/bootstrap.php';

/**
 * 后台菜单 focus
 */
function admin_focus($current)
{
    $currentRouteList = explode('-', explode('.', explode('/', $_SERVER['PHP_SELF'])[2])[0]);
    return in_array($current, $currentRouteList) || (count($currentRouteList) === 1 && $current === 'console') ? ' focus' : '';
}
