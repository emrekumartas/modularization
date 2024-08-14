<?php

namespace Modules\Product\Tests\Product\Models;

use Tests\TestCase;
use Modules\Product\Models\Product;

class ProductTest extends TestCase
{
    public function test_it_creates_an_product()
    {
        $product = new Product();
        $this->assertTrue(true);
    }
}
