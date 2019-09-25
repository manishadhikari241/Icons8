<?php

namespace Libraries\Exceptions;

/**
 * Libraries\Exceptions\HttpNotFound
 *
 * Handle Your Data for Saving/Downloading from
 * URL, File Object Instance or Base64Encode image.
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */

class HttpNotFound extends Base {

	protected $message = 'Ooops Http Not Found';  // Default Exception message
    protected $code    = 404;                     // Default User-defined exception code
}