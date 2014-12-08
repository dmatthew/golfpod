<?php namespace Admin;

use Illuminate\Support\Facades\View;

class AdminController extends \BaseController {

	/**
	 * Display the Admin Dashboard.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin/index');
	}

}
