<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction(Request $request)
	{
		return view('index');
	}
	public function index1Action(Request $request)
	{
		return view('index1', ['product'=>(new ProductController())->show()]);
	}
	public function index2Action(Request $request)
	{
		return view('index2');
	}
	public function index3Action(Request $request)
	{
		return view('index3');
	}
	public function index4Action(Request $request)
	{
		return view('index4');
	}
	public function formavhodaAction(Request $request)
	{
		return view('formavhoda');
	}
	public function regAction(Request $request)
	{
		return view('reg');
	}
	public function getProducts(Request $request)
	{
		return (new ProductController())->show();
	}
	public function auth(Request $request)
	{
	dump($request->login);
	dump($request->password);
	return back()->withInput();
	}
	public function search(Request $request)
	{
	    $index1 = (new ProductController())->search($request->search);
	    if (!is_null($products)){
	        return "Не найдено";
		}
		return view('index1', ['product'=>$index1]);
	}
}