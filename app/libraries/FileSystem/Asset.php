<?php

namespace Libraries\FileSystem;

/**
 * Asset
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */

use App;
use Input;
use Str;

use Libraries\Exceptions\FileNotFound;

class Asset {


	/**
	 * @var Input:all()
	 */
	private $input;

	/**
	 * @var Asset Path File
	 */
	private $file;


    /**
     * __construct()
     * Initialize our Class Here for Dependecy Injection
     *
     * @access  public
     */
	public function __construct()
	{
		$this->input = Input::all();
	}

    /**
     * getAssetUrl()
     *
     * @access  public
     */

	public function setAssetUrl( $colscode, $filepath, $getParams = null, $routeAs = ROUTE_ASSET_FILE_URL )
	{
		// File Path
		$pathinfo = (array) pathinfo( $filepath );

		if ( !@$pathinfo['extension'] )
			return '#';

		$route = '';

		if ( $pathinfo['dirname'] != '.' )
		{
			$dirname = $pathinfo['dirname'];
			$dirname = ltrim($dirname, '/');
			$dirname = str_replace('.', '-', $dirname);
			$dirname = str_replace('/', '.', $dirname);
			$route  .= str_finish( $dirname, '/' );
		}
		else
		{
			$route .= 'r/';
		}

		// Original Name
		$route .= str_finish( Str::slug( $pathinfo['filename'] ), '.');

		$route .= $pathinfo['extension'];

		$assetsRoute = route($routeAs, [ $colscode, $route ]);

		if ( $getParams )
		{
			$inputGet = 'base64=';

			if ( is_array( $getParams ) )
			{
				$inputGet = http_build_query( $getParams );
			}
			elseif ( is_bool( $getParams ) )
			{
				$inputGet .= ( $getParams === true ) ? 'true' : 'false';
			}
			else
			{
				$inputGet .= $getParams;
			}

			$assetsRoute .= '?' . $inputGet;
		}

		return $assetsRoute;
	}

    /**
     * getAssetUrl()
     *
     * @access  public
     */

	public function getAssetUrl( $colscode, $filepath, $filename )
	{

		$file = cols("storage.$colscode");
	    $file = str_finish($file, DIRECTORY_SEPARATOR);

		$filepath = str_replace('.', DIRECTORY_SEPARATOR, $filepath);
	    $file .= str_replace('-', '.', $filepath);

	    $img_suffix = null;

	    if ( $this->input )
	    {
	    	// size [small, medium, large, thumb, etc....]
	    	// custom only
	    	if ( @$this->input['s'] )
	    	{
	    		$img_suffix  = '-' . $this->input['s'];
	    		$file  		.= $img_suffix;
	    	}
	    }

	    $extension = pathinfo( $filename, PATHINFO_EXTENSION );
	    $file  	  .= ".$extension";


	    if ( $img_suffix )
	    {
	    	if ( !file_exists($file) )
	    	{
	    		$file = str_replace($img_suffix, '', $file);
	    	}
	    }

	    $this->file = $file;

	    return $this;

	}

    /**
     * render()
     * Generate Image
     *
     * @access  public
     */
	public function render()
	{
		$image = App::make('Libraries\Http\Image');

		ob_end_clean();
		
		try {



			return $image->render( $this->file, false );
		}
		catch(FileNotFound $e) {

			$file = 'img/default-product';

		    if ( $this->input )
		    {
		    	if ( @$this->input['s'] )
		    	{
		    		$file .= '-'.$this->input['s'];
		    	}
		    }
		    $file .= '.jpg';

			return $image->render( $file, false );
		}
	}

}