<?php
/**
 * User: anubis
 * Date: 27.12.2015
 * Time: 2:57
 */

namespace bc\blog\routes;


use bc\blog\commands\MainCommands;
use bc\cmf\RouteGroup;

class MainRouteGroup extends RouteGroup {

    protected function getBaseUrl() {
        return '/';
    }

    public function initRoutes() {
        $this->addRoute('', MainCommands::loadMainTemplate(), array('get'));
    }
}