<?php
/**
 * User: anubis
 * Date: 27.12.2015
 * Time: 3:01
 */

namespace bc\blog\controllers;

use bc\blog\FactoryRegistry;
use bc\cmf\Controller;
use bc\utils\Logger;

class MainController extends Controller {

    public function loadMainTemplate() {
        Logger::Log("Main Controller")->addInfo("load main template");

        $posts = FactoryRegistry::posts();

        $this->template('main');
    }

}