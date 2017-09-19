<?php
namespace Bounce\Cartographer\Charts;

use Bounce\Cartographer\Map\Glob;
use Bounce\Cartographer\Map\MapInterface;

/**
 * Class GlobChart
 */
class GlobChart
{
    /**
     * @param $eventMaps
     *
     * @return \Bounce\Cartographer\Map\MapInterface
     */
    public function __invoke($eventMaps): MapInterface
    {
        return $this->chart($eventMaps);
    }

    /**
     * @param $eventMaps
     *
     * @return \Bounce\Cartographer\Map\Glob
     */
    public function chart($eventMaps): Glob
    {
        return Glob::create($eventMaps);
    }
}
