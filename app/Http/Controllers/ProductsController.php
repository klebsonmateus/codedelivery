<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminCategoryRequest;


class ProductsController extends Controller
{
    private $repository;
    private $categoryRepository;

    public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository) 
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
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
        $categories = $this->categoryRepository->lists();

        return view('admin.products.edit',compact('product','categories'));
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.products.index');
        
    }

}
