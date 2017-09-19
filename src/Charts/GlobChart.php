<?php
namespace Bounce\Cartographer\Charts;

use Bounce\Cartographer\Map\Glob;

class GlobChart
{
    public function __invoke($eventMaps)
    {
        return $this->chart($eventMaps);
    }

    public function chart($eventMaps)
    {
        return Glob::create($eventMaps);
    }
}
