<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Http\Requests;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    private $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

    	$categories = $this->repository->paginate();

    	return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store(Request $request)
    {   
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.categories.index');
    }
}
