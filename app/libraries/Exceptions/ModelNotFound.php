<?php

namespace Libraries\Exceptions;

/**
 * ModelNotFound
 * Libraries\Exceptions\ModelNotFound
 *
 * Handle Your Data for Saving/Downloading from
 * URL, File Object Instance or Base64Encode image.
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */

class ModelNotFound extends Base {

	protected $message = 'No query results for model';  // Default Exception message
    protected $code    = 404;                     // Default User-defined exception code
}