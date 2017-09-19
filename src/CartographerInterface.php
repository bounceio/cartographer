<?php
/**
 * @author       Barney Hanlon <barney@shrikeh.net>
 * @copyright    Barney Hanlon 2017
 * @license      https://opensource.org/licenses/MIT
 */

namespace Bounce\Cartographer;

use Bounce\Cartographer\Map\MapInterface;

/**
 * Interface CartographerInterface
 * @package Bounce\Bounce\Cartography
 */
interface CartographerInterface
{
    /**
     * @param string $type
     * @param array  ...$eventMap
     *
     * @return MapInterface
     */
    public function chart(string $type, ...$eventMap): MapInterface;
}
