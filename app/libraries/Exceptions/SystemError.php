<?php

namespace Libraries\Exceptions;

/**
 * SystemError
 * Libraries\Exceptions\SystemError
 * Handle default Errors in all throughout the system
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */


class SystemError extends Base {

	protected $message = 'System Failure';  // Default Exception message
    protected $code    = 'sys-900';         // Default User-defined exception code
}