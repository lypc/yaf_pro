<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/2
 * Time: 13:06
 */
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {
        $this->getView()->assign("content", "Hello World");
    }
}