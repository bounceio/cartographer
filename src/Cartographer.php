<?php
/**
 * @author       Barney Hanlon <barney@shrikeh.net>
 * @copyright    Barney Hanlon 2017
 * @license      https://opensource.org/licenses/MIT
 */

namespace Bounce\Cartographer;

use Bounce\Cartographer\Map\MapInterface;
use Psr\Container\ContainerInterface;

class Cartographer implements CartographerInterface
{

    /**
     * @var \Psr\Container\ContainerInterface
     */
    private $container;

    /**
     * Cartographer constructor.
     *
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function chart(string $type, ...$eventMaps): MapInterface
    {
        $chart = $this->fetchChart($type);
        return $chart($eventMaps);
    }

    /**
     * @param string $type
     *
     * @return mixed
     */
    private function fetchChart(string $type)
    {
        if (!$this->container->has($type)) {
            // do something
        }

        return $this->container->get($type);
    }
}
