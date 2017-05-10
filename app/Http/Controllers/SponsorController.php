<?php
/**
 * @package Controllers
 */

namespace App\Http\Controllers;

use App\Model\Conference;
use App\Model\Database;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

/**
 * @todo Use this controller to manaage sponsor information,
 * include the "how to sponsor" form and it's submission.
 */
class SponsorController extends Controller {


	public function index(){
		global $app;

		$db = new Conference();
		$sponsors = $db->sponsors;
		$levels = $db->sponsor_levels;

		$args = [];
		$args['page_title'] = '2017 Sponsors';
		$args['sponsor_levels'] = $levels;
		$args['sponsors'] = $sponsors;
		$args['community_sponsors'] = $sponsors['community'];


		$view = 'sponsors';
		return view($view, $args + ['conference' => $app['conference']]);
	}

}
