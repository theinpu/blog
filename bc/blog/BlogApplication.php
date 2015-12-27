<?php
/**
 * User: anubis
 * Date: 27.12.2015
 * Time: 2:52
 */

namespace bc\blog;

use bc\blog\routes\MainRouteGroup;
use bc\cmf\Application;
use bc\utils\Logger;

class BlogApplication extends Application {

    /**
     * @var float
     */
    private $startTime;

    public function __construct(array $settings = array()) {
        $this->startTime = microtime(true);
        Logger::Log()->addInfo("initializing");
        parent::__construct($settings);
        Logger::Log()->addInfo("initialized");
    }

    function __destruct() {
        Logger::Log()->addInfo("done", array(
            'time'  => microtime(true) - $this->startTime,
            'query' => $_SERVER['REQUEST_URI']
        ));
    }

    protected function initRoutes() {
        Logger::Log()->addInfo("initializing routes");
        $this->addRouteGroup(new MainRouteGroup($this));
        Logger::Log()->addInfo("routes initialized");
    }

    public function run() {
        Logger::Log()->addInfo("running");
        parent::run();
    }

}