<?php
/**
 * Created by PhpStorm.
 * User: Bibek
 * Date: 7/22/2019
 * Time: 12:05 PM
 */

namespace App\General;

trait General
{
    public $data = [];

    public function data($key, $value = null)
    {
        return $this->data[$key] = $value;

    }

}