<?php
define('DS', DIRECTORY_SEPARATOR);
define('DIR_ROOT', getcwd() . DS);
//DIR_ROOT . 'protected' . DS . 'vendor' . DS . 'autoload.php'
// change the following paths if necessary
$yii=DIR_ROOT . 'protected' . DS . 'vendor' . DS . 'yiisoft' . DS . 'yii' . DS . 'framework' . DS . 'yii.php';
$config=DIR_ROOT . 'protected' . DS . 'config' . DS . 'main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
