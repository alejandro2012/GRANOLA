<?php

// put full path to Smarty.class.php
list($_dir,$_trash) = explode("/www",dirname(__FILE__));

require($_dir.'/granola_diet/gd_loader/loader.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TEMPLATE);
$smarty->setCompileDir(COLLECTOR);
$smarty->setCacheDir(CACHE);
$smarty->setConfigDir(CONFIG);

$smarty->assign('title', TITLE);
$smarty->assign('name', 'dsdsdds');

$smarty->display('index.tpl');

?>