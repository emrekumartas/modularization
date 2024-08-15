<?php

namespace Modules\Product\Tests\Product\Models;

use Modules\Product\Database\Factories\ProductFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Modules\Product\Models\Product;

class ProductTest extends TestCase
{
    use DatabaseMigrations;
    public function test_it_creates_an_product()
    {
        $product = Product::factory()->create();

        dd($product);
    }
}
