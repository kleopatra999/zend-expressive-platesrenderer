<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @see       https://github.com/zendframework/zend-expressive-platesrenderer for the canonical source repository
 * @copyright Copyright (c) 2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive-platesrenderer/blob/master/LICENSE.md New BSD License
 */

namespace ZendTest\Expressive\Plates\TestAsset;

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class TestExtension implements ExtensionInterface
{
    public static $engine;

    public function register(Engine $engine)
    {
        self::$engine = $engine;
    }
}
