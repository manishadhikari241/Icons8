<?php

namespace Libraries\Exceptions;

/**
 * Libraries\Exceptions\BaseInterface
 *
 * Inferace Exception that easily extends and modified from
 * the default built-in Exception.
 * @source: http://php.net/manual/en/language.exceptions.php
 *
 * @package Imgholdr.com
 * @author  Rynelle Coronacion <dev.rynelle@gmail.com>
 * @version v1
 */

use Exception;

interface BaseInterface
{
    /* Protected methods inherited from Exception class */
    public function getMessage();                 // Exception message 
    public function getCode();                    // User-defined Exception code
    public function getFile();                    // Source filename
    public function getLine();                    // Source line
    public function getTrace();                   // An array of the backtrace()
    public function getTraceAsString();           // Formated string of trace
    
    /* Overrideable methods inherited from Exception class */
    public function __toString();                 // formated string for display
}