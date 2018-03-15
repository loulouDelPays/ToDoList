<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 02/02/2018
 * Time: 09:57
 */

namespace common\UseCases;


abstract class Response
{

    private $requestIsValid;

    public function __construct()
    {
        $this->requestIsValid = true;
    }


    public function markRequestAsValid(){
        $this->requestIsValid = true;
    }

    public function markRequestAsInvalid(){
        $this->requestIsValid = false;
    }

    public function isRequestValid(): bool {
        return $this->requestIsValid;
    }
}