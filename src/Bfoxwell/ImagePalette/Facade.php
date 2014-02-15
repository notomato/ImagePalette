<?php
/**
 * This file is part of the ImagePalette package.
 *
 * (c) Brian Foxwell <brian@foxwell.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bfoxwell\ImagePalette;

/**
 * Class Facade
 * @package Bfoxwell\ImagePalette
 */
class Facade
{
	/**
	 * Get most prominent colors.
	 *
	 * @param $fileOrUrl
	 * @param int $precision
	 * @param int $maxNumColors
	 * @return array
	 */
    public function getColors($fileOrUrl, $precision = 10, $maxNumColors = 5)
    {
        $load = new ImagePalette($fileOrUrl, $precision, $maxNumColors);
        return $load->getColors();
    }
} 