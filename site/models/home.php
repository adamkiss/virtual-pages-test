<?php

use Kirby\Cms\Page;
use Kirby\Cms\Pages;
use Kirby\Data\Data;
use Kirby\Toolkit\Str;
use Kirby\Uuid\Uuid;

class HomePage extends Page {
    public function children()
    {
        $pages = [];
        // Downloaded from: https://dummyjson.com/products
        $products = Data::read(dirname(__DIR__, 2) . '/dummy-products.json', 'json');

        foreach ($products['products'] as $key => $product) {
            $pages[] = [
                'slug'     => Str::slug($product['title']),
                'num'      => $key+1,
                'template' => 'product',
                'model'    => 'product',
                'content'  => array_merge($product, ['uuid' => Uuid::generate()])
            ];
        }

        return Pages::factory($pages, $this);
    }
}