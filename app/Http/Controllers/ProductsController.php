<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminCategoryRequest;


class ProductsController extends Controller
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

    	$products = $this->repository->paginate();

    	return view('admin.products.index', compact('products'));
    }

    public function create()
    {
    	return view('admin.products.create');
    }

    public function store(AdminCategoryRequest $request)
    {   
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.products.index');
    }

    public function edit($id)
    {
        $product = $this->repository->find($id);

        return view('admin.products.edit',compact('product'));
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.products.index');
        
    }

}
