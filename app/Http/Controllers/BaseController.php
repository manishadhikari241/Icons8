<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class BaseController extends Controller {

	const PAGES = 'iconeditor.';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function view($view, $data = [])
	{
		$make_view = self::PAGES;

		if ( @$this->view_path )
		{
			$make_view .= str_finish(@$this->view_path, '.');
		}
		$data['view_path'] = $make_view;

		return View::make( $make_view . $view )->with($data);
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function response( $data, $code = 200 )
	{
        return Response::json( $data, $code );
	}

}
