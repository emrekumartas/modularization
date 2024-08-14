<?php

namespace Modules\Order\Tests\Order\Models;

use Tests\TestCase;
use Modules\Order\Models\Order;

class OrderTest extends TestCase
{
    public function test_it_creates_an_order()
    {
        $order = new Order();
        $this->assertTrue(true);
    }
}
