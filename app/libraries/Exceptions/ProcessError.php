<?php

namespace Libraries\Exceptions;

/**
 * ProcessError
 * Libraries\Exceptions\SystemError
 * Handle default Errors in all throughout the system
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */

class ProcessError extends Base {

	protected $message = 'Process Error';  // Default Exception message
    protected $code    = 'sys-900';         // Default User-defined exception code
}