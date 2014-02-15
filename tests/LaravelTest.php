<?php
/**
 * This file is part of the ImagePalette package.
 *
 * (c) Brian Foxwell <brian@foxwell.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Bfoxwell\ImagePalette\Facade;

/**
 * Class LaravelTest
 */
class LaravelTest extends PHPUnit_Framework_Testcase {

    /**
     * Test Client
     * @return mixed
     */
    public function testDoesClientReturnArray()
    {
        $load = new Facade;
        $colors = $load->getColors(__DIR__.'/images/test.jpg', 5);
        return $this->assertTrue(is_array($colors));
    }
} 
