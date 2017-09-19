<?php

namespace spec\Bounce\Cartographer;

use Bounce\Cartographer\CartographerInterface;
use PhpSpec\ObjectBehavior;

class CartographerSpec extends ObjectBehavior
{
    function it_is_a_cartographer()
    {
        $this->shouldHaveType(CartographerInterface::class);
    }
}
