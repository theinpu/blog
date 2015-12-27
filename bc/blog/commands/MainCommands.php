<?php
/**
 * User: anubis
 * Date: 27.12.2015
 * Time: 2:58
 */

namespace bc\blog\commands;


use bc\cmf\Command;

/**
 * Class MainCommands
 * @package bc\blog\commands
 *
 * @method static loadMainTemplate()
 */
class MainCommands extends Command {

    public function __construct($method) {
        parent::__construct("bc\\blog\\controllers\\MainController", $method);
    }

    public static function __callStatic($name, $arguments) {
        return new self($name);
    }

}