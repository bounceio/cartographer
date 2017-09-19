<?php

namespace spec\Bounce\Cartographer;

use Bounce\Cartographer\CartographerInterface;
use PhpSpec\ObjectBehavior;
use Psr\Container\ContainerInterface;

class CartographerSpec extends ObjectBehavior
{
    function let(ContainerInterface $container)
    {
        $this->beConstructedWith($container);
    }

    function it_is_a_cartographer()
    {
        $this->shouldHaveType(CartographerInterface::class);
    }
}
