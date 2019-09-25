<?php

namespace Libraries\Exceptions;

/**
 * ValidationFailed
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */

use Exception;

class ValidationFailed extends Base {

    protected $errors;


    /**
     * __construct
     *
     * @param string $message
     * @param int $errors
     * @param int $code
     * @param Exception $previous
     * @access  public
     */
    public function __construct($message, $errors, $code = 0, Exception $previous = null)
    {
        $this->errors = $errors;
        parent::__construct($message, $code, $previous);
    }

    /**
     * getErrors
     *
     * Make validation error accessible
     * @return void
     * @access  public
     **/
    public function getErrors()
    {
        return $this->errors;
    }

}