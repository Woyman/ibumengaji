<?php

namespace App\Http\Controllers\Author;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Generator as Faker;
use App\User;

class AuthorController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('author.dashboard');
	}

}