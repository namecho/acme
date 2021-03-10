<?php if (!defined('ROOT_PATH')) exit ?>
<?php $data = WidgetManager::widget('Account') ?>
<?php $this->need('header.php'); ?>
登录页<?= $data->userName; ?>
<?php $this->need('footer.php'); ?>
