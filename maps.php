<?php

$smarty->configload($conf_file, 'maps');

global $page;
$page = array(
	'Mapper' => true,
	'maps' => true,
	'Book' => false,
	'Title' => $smarty->get_config_vars('Maps'),
	'tab' => 1,
	'type' => 0,
	'typeid' => 0,
	'path' => '[]'
);
$smarty->assign('page', $page);

$smarty->display('maps.tpl');

?>