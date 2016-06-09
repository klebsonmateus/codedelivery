<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Http\Requests;


class CategoriesController extends Controller
{
    public function index(CategoryRepository $repository)
    {

    	$categories = $repository->all();

    	return view('admin.categories.index', compact('categories'));
    }
}
