<?php

namespace App\Services;

use App\Models\Product;
use App\Interface\ProductInterface;

class ProductService implements ProductInterface
{
    public function getAll($perPage)
    {
        return Product::paginate($perPage);
    }

    public function getOne($id)
    {
        return Product::findOrFail($id);
    }

    public function create($data)
    {
        return Product::create($data);
    }

    public function update($id, $data)
    {
        $product = Product::findOrFail($id);
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->sku = $data['sku'];
        return $product->save();
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        return $product->delete();
    }
}