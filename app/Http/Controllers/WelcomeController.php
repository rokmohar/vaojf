<?php namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Currency;
use App\Models\Institute;
use App\Nodes\Institute as InstituteNode;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class WelcomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
}
