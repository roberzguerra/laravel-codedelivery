<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminProductRequest;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\ProductRepository;

class ProductsController extends Controller
{

    private $repository;
    private $category_respository;

    public function __construct(ProductRepository $repository, CategoryRepository $category_repository)
    {
        $this->repository = $repository;
        $this->category_respository = $category_repository;
    }

    public function index()
    {

        $products = $this->repository->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->category_respository->listar();

        return view('admin.products.create', compact('categories'));
    }


    public function store(AdminProductRequest $request)
    {

        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('admin.products.index');
    }

    public function edit($id)
    {

        $product = $this->repository->find($id);
        $categories = $this->category_respository->listar();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(AdminProductRequest $request, $id)
    {
        $data = $request->all();

        $this->repository->update($data, $id);

        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.products.index');
    }
}
