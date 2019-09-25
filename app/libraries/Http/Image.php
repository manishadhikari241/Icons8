<?php

namespace Libraries\Http;

/**
 * Image
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */

use File;
use Response;

use Libraries\Exceptions\FileNotFound;
use Libraries\FileSystem\Mime;

class Image {


	// Throw Exception Messages
    CONST FAILED_BASE64ENCODE       = 'Failed to transform this path (%s) into base64 image, Path Does Not Exists.';
    CONST FILE_NOT_EXIST            = 'File Not Found, Please check your path (%s)';

    // @var Libraries\FileSystem\Mime
	public $mime;


	/**
    * __construct()
    * Initialize our Class Here for Dependecy Injection
    *
    * @return void
    * @access  public
    **/
	public function __construct(Mime $mime)
	{
		$this->mime 	= $mime;
	}

	/**
    * getInstance()
    * Singleton pattern,
    * If you want to instantiate a new instance once
    *
    * @return object
    * @access  public
    **/
	public static function getInstance()
    {
        if (self::$_instance === null)
        	self::$_instance = new self;

        return self::$_instance;
    }

    /**
    * render()
    * Singleton pattern,
    * If you want to instantiate a new instance once
    *
    * @return object
    * @access  public
    **/
	public function render( $path, $isEncrypted = true )
	{
        if ( $isEncrypted === true )
		  $path = decrypt( $path );

		if( File::exists($path) )
	        return $this->response($path);

        throw new FileNotFound(sprintf(self::FILE_NOT_EXIST,$path));
	}

	/**
    * base64EncodedImage()
    * Use it if you want to generate base64 image
    * from File Path.
    *
    * @return object
    * @access  public
    **/
	public function base64EncodedImage($path, $isEncrypted = true)
	{
        if ( $isEncrypted === true )
          $path = decrypt( $path );

		if( File::exists($path) ){
			$content = File::get($path);
			$type    = pathinfo($path, PATHINFO_EXTENSION);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($content);
            return $content;
		}
        
		throw new FileNotFound(sprintf(self::FAILED_BASE64ENCODE,$path));
	}

    /**
    * base64ToImage()
    * Converts Base64 String to image file.
    * returns false if string is not a valid base64encode 
    *
    * @return object
    * @access  public
    **/
    public function base64ToImageFile($base64String, $outputFile)
    {
        $base64String = preg_replace('#^data:image/[^;]+;base64,#', '', $base64String);

        if (!base64_decode($base64String, true)) 
            return false;

        $base64String = base64_decode($base64String);
        $imageType = str_replace('image/', '', finfo_buffer(finfo_open(), $base64String, FILEINFO_MIME_TYPE));
        
        $outputFile = $outputFile.'.'.$imageType;
        
        file_put_contents($outputFile, $base64String);
        
        return ['image_path' => $outputFile, 'image_type' => $imageType];
    }

	/**
    * response()
    * Handling Image Data for returning proper headers and
    * add caching for the response.
    *
    * @return object
    * @access  protected
    **/
	protected function response( $path,$lifetime = 31556926 )
	{

        if (is_null(@$name))
            $name = basename($path);

        $mimeType   = $this->mime->getType($path);
        $handler    = new \Symfony\Component\HttpFoundation\File\File($path);

        /**
        * Prepare some header variables
        */
        $file_time = $handler->getMTime(); // Get the last modified time for the file (Unix timestamp)

        $header_content_length  = $handler->getSize();
        $header_etag            = md5($file_time . $path);
        $header_last_modified   = gmdate('r', $file_time);
        $header_expires         = gmdate('r', $file_time + $lifetime);

        $headers = array(
            'Content-Disposition' => 'inline; filename="' . $name . '"',
            'Last-Modified' => $header_last_modified,
            'Cache-Control' => 'must-revalidate',
            'Expires' => $header_expires,
            'Pragma' => 'public',
            'Etag' => $header_etag
        );

        /**
        * Is the resource cached?
        */
        $h1 = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $header_last_modified;
        $h2 = isset($_SERVER['HTTP_IF_NONE_MATCH']) && str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])) == $header_etag;

        if ($h1 || $h2) {
            return Response::make('', 304, $headers); // File (image) is cached by the browser, so we don't have to send it again
        }

        $headers = array_merge($headers, array(
            'Content-Type' => $mimeType,
            'Content-Length' => $header_content_length
        ));;

        return Response::make(File::get($path), 200, $headers);
	}

}