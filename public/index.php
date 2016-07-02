<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/2
 * Time: 12:57
 */
define("APP_PATH", realpath(dirname(__FILE__).'/../'));
$app = new Yaf_Application(APP_PATH."/conf/application.ini");
$app->run();