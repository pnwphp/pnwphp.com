<?php
/**
 * @package Controllers
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

/**
 * @todo Use this controller to manaage sponsor information, 
 * include the "how to sponsor" form and it's submission.
 */
class SponsorController extends Controller {


	public function index(){
//		global $app;
		//echo "Hello World";

		$args = ['conference' => 'My Conference'];
		return view('sponsors', []);
		//		return view('sponsors', $args );
		/*
		global $app;

		$view = 'sponsors';
		return view($view, $args + ['conference' => $app['conference']]);
		*/
	}

}
