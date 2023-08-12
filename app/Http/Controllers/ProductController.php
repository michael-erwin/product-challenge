<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
    public function index(ProductService $productService, Request $request)
    {
        $perPage = $request->per_page ?? 15;
        return $productService->getAll($perPage);
    }

    public function show(ProductService $productService, $id)
    {
        return $productService->getOne($id);
    }

    public function store(ProductService $productService, ProductStoreRequest $request) {
        $data = $request->all();
        return $productService->create($data);
    }

    public function update(ProductService $productService, ProductUpdateRequest $request, $id)
    {
        $data = $request->all();
        return $productService->update($id, $data->toArray());
    }

    public function destroy(ProductService $productService, $id)
    {
        return $productService->destroy($id);
    }
}
