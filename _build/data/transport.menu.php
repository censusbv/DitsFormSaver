<?php
/**
 * Adds modActions and modMenus into package
 *
 * @package safefiles
 * @subpackage build
 */
$action= $modx->newObject('modAction');
$action->fromArray(array(
    'id' => 1,
    'namespace' => 'ditsformsaver',
    'parent' => 0,
    'controller' => 'index',
    'haslayout' => 1,
    'lang_topics' => 'ditsformsaver:default,file',
    'assets' => '',
),'',true,true);

/* load menu into action */
$menu= $modx->newObject('modMenu');
$menu->fromArray(array(
    'parent' => 'components',
    'text' => 'ditsformsaver',
    'description' => 'ditsformsaver.desc',
    'icon' => '',
    'menuindex' => '0',
    'params' => '',
    'handler' => '',
),'',true,true);
$menu->addOne($action);

return $menu;