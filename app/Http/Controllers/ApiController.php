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
		return view('index1');
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
}