<?php
/**
 * User: anubis
 * Date: 27.12.2015
 * Time: 3:55
 */

namespace bc\blog;

use bc\blog\dataMaps\PostDataMap;
use bc\blog\model\PostFactory;
use bc\model\Factory;

/**
 * Class FactoryRegistry
 * @package bc\blog
 *
 */
class FactoryRegistry {

    /**
     * @var Factory[]
     */
    private static $factories = array();

    public static function posts() {
        if(!isset(self::$factories['posts'])) {
            self::$factories['posts'] = new PostFactory(new PostDataMap());
        }

        return self::$factories['posts'];
    }

}