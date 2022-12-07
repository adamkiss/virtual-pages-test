<?php

use Kirby\Cms\Page;
use Kirby\Cms\Pages;
use Kirby\Data\Data;
use Kirby\Toolkit\Str;

class HomePage extends Page {
    public function children()
    {
        $pages = [];
        // Downloaded from: https://dummyjson.com/products
        $products = Data::read(dirname(__DIR__, 2) . '/dummy-products.json', 'json');

        foreach ($products['products'] as $key => $product) {
            $slug = Str::slug($product['title']);
            $pages[] = [
                'slug'     => $slug,
                'num'      => $key+1,
                'template' => 'product',
                'model'    => 'product',
                'content'  => [
                    'title' => $product['title'],
                    'uuid' => $slug,
                ]
            ];
        }

        return Pages::factory($pages, $this);
    }
}