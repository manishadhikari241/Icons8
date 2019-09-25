<?php

namespace Libraries\Exceptions;

/**
 * Libraries\Exceptions\FileNotFound
 * Handle File that Does not Exists
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */

class FileNotFound extends Base {

	protected $message = 'Ooops File Not Found';  // Default Exception message
    protected $code    = 404;                    // Default User-defined exception code
}